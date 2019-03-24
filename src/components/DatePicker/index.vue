<template>
  <el-col :span='attrset.column||8'>
    <el-form-item :label='attrset.label||""' :label-width='attrset.width||"110px"' :required='attrset.required||false' class="my-date" :class="{maxWidth:attrset.maxWidth==true}">
      <el-date-picker
        v-model="attrset.value"
        :type="attrset.type || 'year'"
        :clearable="attrset.clearable"
        :placeholder="attrset.placeholder || '请选择年份'"
        value-format="yyyy">
      </el-date-picker>
    </el-form-item>
  </el-col>
</template>

<script>
export default {
  name: 'DatePicker',
  props: ["attrset"],
  data() {
    return {
      value: ''
    }
  }
}
</script>

<style lang="scss" scoped>
.my-date {
  width: 100%;
}
.maxWidth {
  max-width: 312px;
}
</style>
<style lang="scss">
.my-date {
  .el-input--prefix .el-input__inner {
    padding-left: 15px;
  }
}
</style>

