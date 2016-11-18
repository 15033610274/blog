$(function(){
	function ajax($obj,$eq){
		$($obj).keyup(function(){
			var str = $obj.substr(1);
			var info = $(this).val();
			console.log(info);
			$.ajax({
				type:'post',
				url:"index.php?s=admin/login/" + str + '&u=username',
				data:{info:info},
	//			dataType:'json',
				success:function(phpCode){
					if(phpCode == 0){
						$('.error').eq($eq).css('display',"block");
						$('.submit').attr('disabled','disabled');
					}else{
						$('.error').eq($eq).css('display',"none");
						$('.submit').attr('disabled',false);
					}
				}
			});
		})
	}
	ajax('.username','0');
	ajax('.password','1');
	ajax('.code','2');
})
