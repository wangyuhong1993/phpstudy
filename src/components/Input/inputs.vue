<template>
  <div>
    <input
      type="text"
      :class="[{'MyInputColor':red},{'text-row-one':ellipsis}]"
      :placeholder="placeholder"
      v-model="inputValue"
      @input="valueChange()"
      @focus="inputFocus($event)"
      @blur="inputBlur()"
      @change="changeFunc"
      :maxlength="maxlength"
      :disabled="disabled"
      :maximum="maximum">
  </div>
</template>
<script>
  import { keepTwoDecimalFull} from "@/utils/index";
  export default {
    name: "at-input",
    props: {
      red:{
        type:Boolean,
        default:false
      },
      // 单行是否省略
      ellipsis: {
        type:Boolean,
        default:false
      },
      value: {
        type: [String, Number],
        default: ''
      },
      type: {
        type: String,
        default: 'text'
      },
      placeholder: {
        type: String
      },
      maxlength: {
        type: [Number, String]
      },
      disabled: {
        type: Boolean,
        default: false
      },
      decimal: {
        type: String
      },
      // 最大值
      maximum: {
        type: [Number, String]
      }
    },
    data() {
      return {
        inputValue: this.value === undefined || this.value === null ? '' : this.value,
      }
    },
    methods: {
      valueChange() {
        if(this.type != 'text'){
          //   过滤非法字符
          var pattern = new RegExp("[`~!@#$^&*()=+|{}':;',\\[\\]<>/?~！@#￥……&*（）——|{}【】‘；：”“'。，、？]");
          this.inputValue = this.inputValue.replace(pattern, '')
        }
        //   格式校验
        if (this.type === 'number') {
          this.inputValue = this.inputValue.replace(/[^\0-9\.]/g, '');
        }else if (this.type == 'price') {
          //先把非数字的都替换掉，除了数字和.
          this.inputValue = this.inputValue.replace(/[^\d.]/g, "");
          //保证只有出现一个.而没有多个.
          this.inputValue = this.inputValue.replace(/\.{2,}/g, "");
          //必须保证第一个为数字而不是.
          this.inputValue = this.inputValue.replace(/^\./g, "");
          //保证.只出现一次，而不能出现两次以上
          this.inputValue = this.inputValue.replace(".", "$#$").replace(/\./g, "").replace("$#$", ".");
          //只能输入两个小数
          this.inputValue = this.inputValue.replace(/^(\-)*(\d+)\.(\d\d).*$/, '$1$2.$3');
          // 超过最大值
          if(this.maximum && Number(this.inputValue)>Number(this.maximum)){
            this.$layer.notify(`不能超过最大值${this.maximum}`, { title: '提示'})
            this.inputValue = this.maximum
          }
          if (this.inputValue > 100000000) {
            this.$layer.notify('不能超过最大值100000000', { title: '提示'})
            this.inputValue = 100000000
          }
        }else if (this.type == 'integer'){
          this.inputValue = this.inputValue.replace(/[^\d]/g,'');
        }else if (this.type == 'text') { //hwq: 纯文本验证，限制输入字数100内
          if ( this.inputValue.length > 100 ){
            this.$layer.notify('字数不可超过100', { title: '提示'})
          }
          this.inputValue = this.inputValue.replace(/^(.{0,99}).*$/, '$1');
        }
        this.$emit('input', this.inputValue);
        this.$emit('change', this.inputValue);
      },
      changeFunc() {
        this.$emit('throttle', this.inputValue)
      },
      inputFocus(e) {
        // 光标聚焦选中输入值
        e.target.select();
        this.$emit('focus')
      },
      inputBlur(e){
        if((this.type == 'price') && this.decimal==1){
          // 保留一位小数
          this.inputValue = Number(this.inputValue).toFixed(1);
        }else if(this.type === 'number'|| this.type == 'price'){
          // 数值类型或金额类型，保留两位小数
          this.inputValue = keepTwoDecimalFull(this.inputValue);
        }
        this.$emit('blur', this.inputValue)
      }
    },
    watch: {
      value: {
        handler(curVal, oldVal) {
          this.inputValue = curVal
        },
        deep: true
      }
    },
  }
</script>
