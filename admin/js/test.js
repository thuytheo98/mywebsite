function validateForm() {
            var password= document.getElementById("password").value;
            var repassword= document.getElementById("repassword").value;
            if (password === repassword){ //kiểm tra giá trị có bằng và kiểu có giống hay k
                alert("same");
                return false;
            }
        }
    var a=[12,43,23,65,97,23,78];
    //quick sort
    var pIndex = a.length-1;
    var p= a[pIndex];
    var left =[];
    var right = [];
    for(let i=0; i <= pIndex ;i++){
        if(a[i]<= p){
            left.push(a[i]);
        }
        if(a[i] > p){
            right.push(a[i]);
        }
    }
    console.log(left.concat(right));
    //fuctions
    function quick(arr){

        if( arr.length == 0) // kiểm tra giá trị có bằng hay k , phải kiểm tra mảng trc nếu k function sẽ k chạy
            return [];

        var pIndex = arr.length - 1;
        var p = arr[pIndex];
        var left = [];
        var right = [];
        for(let i = 0; i < arr.length - 1 ;i++){
            if(arr[i] < p){
                left.push(arr[i]);
            }else{
                right.push(arr[i]);
            }
        }
        return quick(left).concat(p, quick(right));
    }
    console.log(quick(a));
    //bubble sort
    let temp;
    for (let i=0; i <= left.length-2; i++){
        for (let j = left.length-1; j>i; j--) {
            if (left[j] < left[j - 1]) {
                temp = left[j];
                left[j] = left[j - 1];
                left[j - 1] = temp;
            }
        }
    }
    console.log(left);
    //select sort
    for (let i=0; i<= right.length-1;i++){
        var min = i;
        for(let j=i+1; j<=right.length;j++){
            if (right[j]<right[min]){
                let temp = right[min];
                right[min]= right[j];
                right[j]= temp;
            }
        }
    }
    console.log(right);
    console.log(left.concat(right));
    //insert sort :
    var a=[12,43,23,65,97,23,78];
    var cur,j,i;
    for(i =  1; i <= a.length ;i++){
        cur = a[i];
        j = i - 1;
        while (j >= 0 && a[j] > cur){
            a[j + 1] = a[j];
            j--;
        }
        a[j + 1] = cur;
    }
    console.log(a);
    //binarySearch với day đã đk sắp xếp
    var a = [1,2,3,4,5,6];
    function binarySearch(arr, x, left, right){
        if( arr.length == 0)
            return [];
        while (left <= right){
            let mid = Math.round((left + right)/2);
            if(a[mid] == x)
                return mid;
            if(a[mid] > x){ //số ở giữa mà lớn hơn số cần tìm thì tìm bên bên trái số ở giữa
                right = mid - 1; // nên sẽ chỉ xét từ đầu đến số trc số ở giữa
                return binarySearch(arr,x,left, right);
            }
            if(a[mid] < x){
                left = mid + 1; // ngược lại với trg hợp trên nhá ta cần tìm khoảng bên phải số ở giữa => xét từ số ở giữa đến hết
                return binarySearch(arr, x, left, right);
            }
        }
        return -1;
    }
    console.log(binarySearch(a,6,0,a.length-1));
    //merge sort
    var a=[1,2,3,4,5,6];
    function merge(arr,left,mid,right){
        if(arr.length == 0) return [];

        let l = left;
        let m = mid + 1;
        let sort = [];
        while (l <= m && m <= right) {
            if (arr[l] < arr[m]) {
                sort.push(arr[l]);
                l++;
            } else {
                sort.push(arr[m]);
                m++;
            }
        }
        while (l <= m  ){
                sort.push(arr[l]);
                l++;
        }
        while (m <= right ){
                sort.push(arr[m]);
                m++;
            }
        for (let i = 0; i < arr.length; i++) {
            arr[i + left] = sort[i];
        }
    }
    function mergeSort(arr, l, r){
        if(l < r){
            let mid = Math.floor((l + r) / 2);
            mergeSort(arr, l, mid);
            mergeSort(arr, mid + 1 , r);
            merge(arr, l, mid, r);
        }
        return arr;
    }
    console.log(mergeSort(a, 0, a.length - 1));
    //heap sort
