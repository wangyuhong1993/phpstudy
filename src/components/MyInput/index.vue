<template>
  <el-col :span='attrset.column||8' :style='attrset.style || ""' :class='attrset.class || ""'>
    <el-form-item :label='attrset.label||""' :label-width='attrset.width||"110px"' :required='attrset.required||false' :prop='attrset.prop||""'>
      <el-input :maxlength="attrset.maxlength || ''" :type='attrset.type||""' v-model='attrset.value' :placeholder=' attrset.placeholder|| "" ' :disabled='attrset.disabled||false ' :class='{maxWidth:attrset.maxWidth==true, "ifInsureVehicle":attrset.isCheck==true || attrset.ifInsureVehicle=="0" } ' @keyup.native="keyupEvent" @focus="focus">
      </el-input>
      <slot></slot>
    </el-form-item>
  </el-col>
</template>
<script>
/*
  使用方法:
  <MyInput :attrset="queryParam.userName"></MyInput>

  userName:{
    label:"用户名:",
    value:"",
    maxWidth:true
  },
*/
export default {
  name: 'MyInput',
  props: ["attrset"],
  data() {
    return {

    }
  },
  methods: {
    keyupEvent() {
      this.$emit('handlerKeyup');
    },
    focus() {
      this.attrset.isCheck = false
    }
  }
}
</script>

<style lang="scss" scoped>
.maxWidth {
  max-width: 260px;
}
</style>
<style>
.ifInsureVehicle .el-input__inner {
  color: #FF0000 !important
}
</style>

