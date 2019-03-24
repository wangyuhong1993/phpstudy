
/**
* @desc: 过滤器工具
* @author: hongwenqing
* @date: 2018-11-27
*/

import moment from 'moment'
/*
* 过滤时间日期格式为： 2018-12-12 17:25:12
* @ms  毫秒数
* @hms  是否需要时分秒，默认 false
*/
const timeFilter = function(ms, hms = true) {
  var format = hms ? 'Y-M-D H:mm' : 'Y-M-D'

  if (ms === null || ms === '') {
    return ''
  } else if(ms === '永久'){
    return '永久'
  }

  return moment(ms).format(format)
}

export {
  timeFilter
}
