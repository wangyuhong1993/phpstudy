<template>
  <el-checkbox :checked="checked"></el-checkbox>
</template>

<script>
export default {
  name: 'MyCheckbox',
  props: {
    checked: {
      type:Boolean,
      default:false
    },
    val:{
      type:String,
      default:''
    }
  },
  data(){
    return {
      value: this.val
    }
  },
  created(){

  }
}
</script>
   

