{{--# test.blade.php--}}
{{--{{$name}}你好，这是一封测试文件。--}}

<html>
<head>
    <title>你好</title>
    <meta charset="utf-8">
</head>
<body class="nui-scroll" contenteditable="true">
{{$name}}你好，这是一封测试文件。
    <div class="APP-editor-edtr" style="position:relative;">
        <div class="APP-editor-edtr-mask" style="display:none"></div>
        <iframe frameborder="0" tabindex="1" class="APP-editor-iframe" style="position:absolute"></iframe>
        {{--<img src="{{$imgPath}}">--}}
        <br><img src='{{$message->embedData($image,'周文刚.jpg')}}'>
    </div>
</body>
</html>
{{--<img src="{{$message->embedData($image,'我的自拍照.jpg')}}">--}}