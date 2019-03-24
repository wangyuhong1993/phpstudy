<template>
  <el-col :span="column" :class="labelClass">
    <el-form-item :label="label" :label-width="width" :required="required">
      <slot></slot>
      <span v-html="val"></span>
    </el-form-item>
  </el-col>
</template>

<script>
export default {
  name: 'Babel',
  props: {
    width: {
      type: String,
      default: "110px"
    },
    required: {
      type: Boolean,
      default: false
    },
    labelClass: {
      type: String,
      default: ""
    },
    column: {
      type: Number,
      default: 8
    },
    label: {
      type: String,
      default: ''
    },
    val: {
      type: [String, Number],
      default: ''
    }
  }
}
</script>

