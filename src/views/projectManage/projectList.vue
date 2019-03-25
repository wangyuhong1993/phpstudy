<template>
  <div class="app-container">
    <!-- 查询条件 -->
    <div class="search-condition">
      <div class="title-container">
        <span class="title-text">查询条件</span>
      </div>
      <el-row>
        <el-form ref="form" label-width="80px">
          <el-row>
            <MyInput :attrset="queryParam.projectCode"></MyInput>
            <MyInput :attrset="queryParam.projectName"></MyInput>
            <el-col :span="8">
              <el-form-item label="项目类型">
                <el-radio-group v-model="queryParam.status">
                  <el-radio :label="长期">长期</el-radio>
                  <el-radio :label="短期">短期</el-radio>
                  <el-radio :label="运维">运维</el-radio>
                </el-radio-group>
              </el-form-item>
            </el-col>
          </el-row>
          <el-row>
            <MyInput :attrset="queryParam.projectManager"></MyInput>
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
        </el-form>
        <el-row style="text-align:center; padding-bottom:30px">
          <el-button type="primary" size="medium">查询</el-button>
          <el-button type="info" size="medium">重置</el-button>
        </el-row>
      </el-row>
    </div>
    <!-- 查询结果 -->
    <div class="search-result">
      <div class="title-container">
        <span class="title-text">查询结果</span>
      </div>
      <div class="clearfix operate-btn-group">
        <el-button type="primary" size="medium" class="fr" @click="handleAdd">新增模板</el-button>
      </div>
      <el-table
        v-loading="listLoading"
        :data="deliverList"
        element-loading-text="Loading"
        border
        fit
        highlight-current-row
        style="width:100%">
        <el-table-column type="index" align="center" label="序号" width="60px">
        </el-table-column>
        <el-table-column label="项目阶段" align="center">
          <template slot-scope="scope">
            {{ scope.row.stage }}-{{ scope.row.detailStage }}
          </template>
        </el-table-column>
        <el-table-column label="模板名称" align="center">
          <template slot-scope="scope">
            <span>{{ scope.row.templateName }}</span>
          </template>
        </el-table-column>
        <el-table-column label="模板文件" align="center">
          <template slot-scope="scope">
            {{ scope.row.file }}
          </template>
        </el-table-column>
        <el-table-column class-name="status-col" label="模板生效时间"  align="center">
          <template slot-scope="scope">
            {{scope.row.date[0]}}~{{scope.row.date[1]}}
          </template>
        </el-table-column>
        <el-table-column align="center" label="模板状态" >
          <template slot-scope="scope">
            <span>{{ scope.row.status }}</span>
          </template>
        </el-table-column>
        <el-table-column align="center" label="修改人" >
          <template slot-scope="scope">
            <span>{{ scope.row.operator }}</span>
          </template>
        </el-table-column>
        <el-table-column align="center" label="修改时间" >
          <template slot-scope="scope">
            <span>{{ scope.row.updateTime | timeFilter}}</span>
          </template>
        </el-table-column>
        <el-table-column align="center" label="操作">
          <template slot-scope="scope">
            <el-button type="text" @click="handleUpdate(scope.row,scope.$index)" >{{scope.row.status}}</el-button>
            <el-button type="text" class="red" @click="handleDelete(scope.row,scope.$index)" >删除</el-button>
          </template>
        </el-table-column>
      </el-table>
    </div>
  </div>
</template>

<script>
import MyInput from "@/components/MyInput/index.vue";
import MySelect from "@/components/MySelect/index.vue";
import DatePicker from "@/components/DatePicker/index.vue";
import { timeFilter } from "@/utils/filters.js"
import { mapGetters, mapActions } from "vuex";

export default {
  filters: {
    timeFilter
  },
  data() {
    return {
      listLoading: false,
      queryParam:{
        projectCode:{
          label:"项目代码",
          value:"",
          width:"90px",
          column:8,
          maxWidth:true,
        },
        projectName:{
          label:"项目名称",
          value:"",
          width:"90px",
          column:8,
          maxWidth:true,
        },
        projectManage:{
          label:"项目经理",
          value:"",
          width:"90px",
          column:8,
          maxWidth:true,
        },
        status:1,
        date:'', // 生效时间
      }
    }
  },
  components:{
    MyInput,
    MySelect,
    DatePicker
  },
  computed: {
    ...mapGetters({
      deliverList: "deliverList", // 交付物列表数据
    })
  },
  created() {

  },
  methods: {
    ...mapActions({
      DeleteDelever: "DeleteDelever",
      UpdateDelever: "UpdateDelever"
    }),
    // 新增
    handleAdd(){
      this.$parent.currentView = "add";
    },
    // 删除
    handleDelete(data,index){
      this.DeleteDelever({data,index})
    },
    // 修改
    handleUpdate(data,index){
      data.status = data.status=='启用'?'停用':'启用';
      this.UpdateDelever({data,index})
    }
  },
  watch:{
    "deliverList":{
      handler:function(newVal,oldVal){
        console.log(newVal)
      },
      deep:true
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

