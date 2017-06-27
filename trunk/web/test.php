<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <title>新建待办事项</title>
  <?php require("template/$OJ_TEMPLATE/css_test.php");?>
  <?php require("template/$OJ_TEMPLATE/js_test.php");?> 
</head>
<body>
  <div class="sui-container">
    <ul class="sui-breadcrumb">
      <li><a href="#">待办事项</a></li>
      <li class="active">添加待办事项</li>
    </ul>
    <div class="sui-msg msg-large msg-block msg-success">
      <div class="msg-con">
        新的待办事项”晚上9点拿夜宵”创建成功！
      </div>
      <s class="msg-icon"></s>
    </div>
    <form class="sui-form form-horizontal sui-validate" action="" method="post" id="servingForm">
      <div class="control-group">
        <label class="control-label">名称：</label>
        <div class="controls">
          <input class="input-xlarge" type='text' data-rules="required|minlength=2|maxlength=50" />
        </div>
      </div>
      <div class="control-group">
        <label class="control-label">时间：</label>
        <div class="controls">
          <select class="input-medium " name='month' data-rules='required'>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">8</option>
            <option value="8">9</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
          </select>
          月
          <select class="input-medium " name='date' data-rules='required'>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">8</option>
            <option value="8">9</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
          </select>
          日
        </div>
      </div>
      <div class="control-group">
        <label class="control-label">补充说明：</label>
        <div class="controls">
          <textarea class='input-xlarge' data-rules='maxlength=100'></textarea>
        </div>
      </div>
      <div class="control-group">
        <div class="controls">
          <button class="sui-btn btn-primary btn-xlarge">创建待办事项</button>
        </div>
      </div>
    </form> 
    
    
  </div>
</body>
</html>