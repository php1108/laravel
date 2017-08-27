<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            @include('UEditor::head');
            <div class="content">

                <form action="/upload" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="file" name="source" >
                    <input type="submit" value="提交">
                </form>

<?php //echo phpinfo(); ?>
                <div class="title">Laravel 5</div>
            </div>
        </div>
        <!-- 加载编辑器的容器 -->
        <script id="container" name="content" type="text/plain">
    这里写你的初始化内容
</script>

        <!-- 实例化编辑器 -->
        <script type="text/javascript">
            var ue = UE.getEditor('container');
            ue.ready(function() {
                ue.execCommand('serverparam', '_token', '{{ csrf_token() }}');//此处为支持laravel5 csrf ,根据实际情况修改,目的就是设置 _token 值.
            });
        </script>
    </body>
</html>
