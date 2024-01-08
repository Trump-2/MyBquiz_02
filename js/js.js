// JavaScript Document
function lo(th,url)
{
	$.ajax(url,{cache:false,success: function(x){$(th).html(x)}})
}

// 內建的 good 跟我們自己寫的函數名稱相同，要記得刪除掉
