<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<script>
		// 1.冒泡排序——把大的往上冒
		var examplearr=[8,94,15,88,55,76,21,39];
		function sortarr(arr){
		    for(i=0;i<arr.length-1;i++){
		        for(j=0;j<arr.length-1-i;j++){
		            if(arr[j]>arr[j+1]){
		                var temp=arr[j];
		                arr[j]=arr[j+1];
		                arr[j+1]=temp;
		            }
		        }
		    }
		    return arr;
		}
		sortarr(examplearr);
		console.log(examplearr);

		// 2. 选择排序——每一个数都与第一个比较,小的往前面
		function selectSort(arr){
            var len=arr.length;
            var temp;
            for(var i=0;i<len-1;i++){
                for(var j=i+1;j<len;j++){
                    if(arr[j]<arr[i]){
                        temp=arr[j];
                        arr[j]=arr[i];
                        arr[i]=temp;
                    }
                }
                i++;
             }
            return arr;
         }
         selectSort(examplearr)
	</script>
</body>
</html>