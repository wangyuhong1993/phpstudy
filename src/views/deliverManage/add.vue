<template>
  <div class="app-container">
    <!-- 查询条件 -->
    <div class="search-condition">
      <div class="title-container">
        <span class="title-text">基本信息</span>
      </div>
      <el-row>
        <el-form ref="form" label-width="80px">
          <el-row>
            <el-col :span="8">
              <el-form-item label="项目阶段" class="stage-project">
                <el-select clearable v-model="queryParam.stage.value" placeholder="请选择阶段">
                  <el-option
                    v-for="item in queryParam.stage.opts"
                    :key="item.value"
                    :label="item.label"
                    :value="item.value">
                  </el-option>
                </el-select>
                <el-select clearable v-model="queryParam.detailStage.value" placeholder="请选择明细阶段">
                  <el-option
                    v-for="item in queryParam.detailStage.opts"
                    :key="item.value"
                    :label="item.label"
                    :value="item.value">
                  </el-option>
                </el-select>
              </el-form-item>
            </el-col>
            <MyInput :attrset="queryParam.templateName"></MyInput>
            <el-col :span="8">
              <el-form-item label="模板状态">
                <el-radio-group v-model="queryParam.status">
                  <el-radio label="启用">启用</el-radio>
                  <el-radio label="禁止">禁止</el-radio>
                </el-radio-group>
              </el-form-item>
            </el-col>
          </el-row>
          <el-row>
            <el-col :span="8">
              <el-form-item label="模板生效时间" label-width="130px;">
                <el-date-picker
                  style="height:40px;width:260px;"
                  v-model="queryParam.date"
                  type="daterange"
                  :editable="false"
                  value-format="yyyy-MM-dd"
                  start-placeholder="导入开始日期"
                  end-placeholder="导入结束日期">
                </el-date-picker>
              </el-form-item>
            </el-col>
          </el-row>
          <el-row>
            <MyInput :attrset="queryParam.templateDescription"></MyInput>
          </el-row>
        </el-form>
      </el-row>
    </div>
    <!-- 查询结果 -->
    <div class="search-result">
      <div class="title-container">
        <span class="title-text">模板文件</span>
      </div>
      <input type="file" ref="upload">
      <!-- 无上传url地址，产生跨域 -->
      <!-- <el-upload
        ref="upload"
        class="upload-demo"
        action="https://jsonplaceholder.typicode.com/posts/"
        :auto-upload="false"
        :on-preview="handlePreview"
        :on-success="handleSuccess"
        :on-exceed="handleExceed"
        accept=".doc,.docx">
        <el-button size="small" type="primary">点击上传</el-button>
        <div slot="tip" class="el-upload__tip">只能上传doc/docx文件</div>
      </el-upload> -->
      <el-row style="text-align:center; padding-bottom:30px">
        <el-button type="primary" size="medium" @click="save">保存</el-button>
        <el-button type="primary" size="medium" @click="save">保存并继续</el-button>
        <el-button type="取消" size="medium" @click="cancel">取消</el-button>
      </el-row>
    </div>
  </div>
</template>

<script>
import MyInput from "@/components/MyInput/index.vue";
import MySelect from "@/components/MySelect/index.vue";
import DatePicker from "@/components/DatePicker/index.vue";
import { mapActions } from "vuex";

export default {
  data() {
    return {
      queryParam:{
        stage:{
          value:"",
          width:"90px",
          column:8,
          maxWidth:true,
          opts:[{
            value: '系统测试',
            label: '系统测试'
          }, {
            value: '需求分析',
            label: '需求分析'
          },{
            value: '系统设计',
            label: '系统设计'
          },{
            value: '系统开发',
            label: '系统开发'
          }]
        },
        detailStage:{
          value:"",
          width:"90px",
          column:8,
          maxWidth:true,
          opts:[{
            value: 'ST测试',
            label: 'ST测试'
          }, {
            value: 'UAT测试',
            label: 'UAT测试'
          },{
            value: 'PT测试',
            label: 'PT测试'
          }]
        },
        templateName:{
          label:"模板名称",
          value:"",
          width:"90px",
          column:8,
          maxWidth:true,
        },
        status:"启用",
        date:'', // 生效时间,
        templateDescription:{
          type:"textarea",
          label:"模板说明",
          value:"",
          width:"90px",
          column:24
        }
      }
    }
  },
  components:{
    MyInput,
    MySelect,
    DatePicker
  },
  created() {

  },
  methods: {
    ...mapActions({
      AddDeliver: "AddDeliver"
    }),
    handleExceed(){
      this.$message.warning("当前限制选择1个文件");
    },
    // 保存
    save(){
      // 新增的数据
      let data = {
        stage:this.queryParam.stage.value,
        detailStage:this.queryParam.detailStage.value,
        templateName:this.queryParam.templateName.value, // 模板名称
        status:this.queryParam.status, // 状态
        date:this.queryParam.date,// 时间
        updateTime:new Date().getTime(), // 更新时间
        operator:'admin', // 修改人
        file:this.$refs.upload.files[0] && this.$refs.upload.files[0].name // 文件名
      }
      this.AddDeliver(data)
      this.$parent.currentView = "list";
    },
    // 取消
    cancel(){
      this.$parent.currentView = "list";
    }
  }
}
</script>
<style lang="scss">
  .stage-project {
    .el-form-item__content {
      display: flex;
      .el-select:first-of-type {
        margin-right: 10px;
      }
    }
  }
  .search-result{
    .operate-btn-group {
      margin-bottom: 15px;
    }
  }
</style>

