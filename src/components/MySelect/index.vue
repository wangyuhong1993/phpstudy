<template>
  <el-col :span='attrset.column||8'>
    <el-form-item :label='attrset.label||""' :label-width='attrset.width||"110px"' :required='attrset.required||false'>
      <el-select v-model='attrset.value' :placeholder='attrset.placeholder||"请选择"' :disabled='attrset.disabled||false' :class='{maxWidth:attrset.maxWidth==true}' class="myselect" @change="change" clearable>
        <el-option v-for="item in attrset.opts" :key="item.value" :label="item.label" :value="item.value">
        </el-option>
      </el-select>
    </el-form-item>
  </el-col>
</template>
<script>
/*
  使用方法:
  <MySelect :attrset="queryParam.status"></MySelect>

  status:{
    label:"用户状态:",
    value:"",
    width:"80px",
    column:24,
    opts:[{
      value: '0',
      label: '无效'
    }, {
      value: '1',
      label: '有效'
    },{
      value: '2',
      label: '锁定'
    }]
  },
*/
export default {
  name: 'Babel',
  props: ["attrset"],
  data() {
    return {
      value: this.val
    }
  },
  methods: {
    change() {
      this.$emit('change')
    }
  },
  created() {

  }
}
</script>

<style lang="scss" scoped>
.maxWidth {
  max-width: 260px;
}

.myselect {
  width: 100%;
}
</style>
