<extend file='master.html'/>
<block name="content">
    <parent name="header" title="这是标题">
        <!-- content start -->
        <div class="admin-content">
            <div class="am-cf am-padding">
                <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">密码</strong> / <small>修改密码</small></div>
            </div>
            <div class="am-cf am-padding">
                <form action="" method="post" id="form">
                    <div class="form-group">
                        <label for="password">password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
                    </div>
                    <div class="form-group">
                        <label for="new_password">new_password</label>
                        <input type="password" class="form-control" name="new_password" id="new_password" placeholder="Enter new_password">
                    </div>
                    <div class="form-group">
                        <label for="twice_password">new_password</label>
                        <input type="password" class="form-control" name="twice_password" id="twice_password" placeholder="Enter twice_password">
                    </div>
                    <input type="submit" class="btn btn-primary btn-block" value="修改" id="submit">
                </form>
                <script>
                    $(function(){
                        $('#submit').click(function(){
                            var data = $("#form").serialize();
                            $.ajax({
                                type:'post',
                                url:'{{u(changePwd)}}',
                                data:data,
                                dataType:'json',
                                success:function(phpCode){
                                    if(phpCode.valid){
                                        require(['util'], function (util) {
                                            util.message(phpCode.message,"{{u('login.login')}}",'success');
                                        })
                                    }else{
                                        require(['util'], function (util) {
                                            util.message(phpCode.message,'back','error');
                                        })
                                    }
                                }
                            });
                            return false;
                        })
                    })
                </script>
            </div>
        </div>
        <!-- content end -->
    <parent name="footer">
</block>

