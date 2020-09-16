<!DOCTYPE HTML>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="d58Et_hG0KrLc6xKv03J8U5NA6jqak0kCFxBaz7Y1MM" />
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/app.css">
    <style>body{font-family:"Phetsarath OT";}</style>
</head>

<body>



        
    <div class="container">
    <div class="col-3 float-right">
                    <select  id="amount" class="form-control">
                      <option value="1000000">ລາງ​ວັນ {{number_format(1000000)}} ກີບ</option>
                      <option value="5000000">ລາງ​ວັນ {{number_format(5000000)}} ກີບ</option>
                      <option value="30000000">ລາງ​ວັນ {{number_format(30000000)}} ກີບ</option>
                      <option value="50000000">ລາງ​ວັນ {{number_format(50000000)}} ກີບ</option>
                    </select>
                    </div>
                <div class="slotwrapper" id="example2">
                    <ul>
                        <li>A</li>
                        <li>B</li>
                        <li>C</li>
                    </ul>
                    <ul>
                        <li>0</li>
                        <li>1</li>
                        <li>2</li>
                        <li>3</li>
                        <li>4</li>
                        <li>5</li>
                        <li>6</li>
                        <li>7</li>
                        <li>8</li>
                        <li>9</li>
                    </ul>
                    <ul>
                        <li>0</li>
                        <li>1</li>
                        <li>2</li>
                        <li>3</li>
                        <li>4</li>
                        <li>5</li>
                        <li>6</li>
                        <li>7</li>
                        <li>8</li>
                        <li>9</li>
                    </ul>
                    <ul>
                        <li>0</li>
                        <li>1</li>
                        <li>2</li>
                        <li>3</li>
                        <li>4</li>
                        <li>5</li>
                        <li>6</li>
                        <li>7</li>
                        <li>8</li>
                        <li>9</li>
                    </ul>
                    <ul>
                        <li>0</li>
                        <li>1</li>
                        <li>2</li>
                        <li>3</li>
                        <li>4</li>
                        <li>5</li>
                        <li>6</li>
                        <li>7</li>
                        <li>8</li>
                        <li>9</li>
                    </ul>
                    <ul>
                        <li>0</li>
                        <li>1</li>
                        <li>2</li>
                        <li>3</li>
                        <li>4</li>
                        <li>5</li>
                        <li>6</li>
                        <li>7</li>
                        <li>8</li>
                        <li>9</li>
                    </ul>
                    <ul>
                        <li>0</li>
                        <li>1</li>
                        <li>2</li>
                        <li>3</li>
                        <li>4</li>
                        <li>5</li>
                        <li>6</li>
                        <li>7</li>
                        <li>8</li>
                        <li>9</li>
                    </ul>
                    <ul>
                        <li>0</li>
                        <li>1</li>
                        <li>2</li>
                        <li>3</li>
                        <li>4</li>
                        <li>5</li>
                        <li>6</li>
                        <li>7</li>
                        <li>8</li>
                        <li>9</li>
                    </ul>
               
                </div>
                <div>
                 
                    <button type="button" class="btn btn-success btn-lg" id="btn-example2">Start Spin!</button>
                    <div class="inputid d-flex justify-content-around" style="margin-top: 15px">


</div>                  
     </div>
           
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="../../../app-assets/js/slotmachine.min.js"></script>

    <script type="text/javascript">

        $('#btn-example2').click(function() {
          $('.inputid').empty();
            sound.play();
            var amount = $('#amount').val();
            $.ajax({
                url:'{{ route('random.random')}}',
                method:'GET',
                data:{amount:amount},
                dataType:'json',
                success:function(data){
                    console.log(data.info_data);
                   var num0= data.info_data[1];
                   var num1= parseInt(data.info_data[0][0])+1;
                   var num2= parseInt(data.info_data[0][1])+1;
                   var num3= parseInt(data.info_data[0][2])+1;
                   var num4= parseInt(data.info_data[0][3])+1;
                   var num5= parseInt(data.info_data[0][4])+1;
                   var num6= parseInt(data.info_data[0][5])+1;
                   var num7= parseInt(data.info_data[0][6])+1;
                   
                   $('#example2 ul').playSpin({
                  endNum: [num0, num1,num2 ,num3 ,num4 ,num5, num6,num7],
                  time: 569,
              
                  stopSeq: 'leftToRight',
                  onEnd: function() {
                    ding.play(); // Play ding after each number is stopped
                },
                  onFinish: function() {
                    sound.pause(); // To stop the looping sound is pause it
                    $('.inputid').html(data.name);
                }
            });
                }

            });
       

        });

        var sound = new Audio('../../../app-assets/ringtones/spinning.mp3');
        var ding = new Audio('../../../app-assets/ringtones/ding.wav');
        // Loop of playing sound
        sound.addEventListener('ended', function() {
            this.currentTime = 0;
            this.play();
        }, false);

    </script>
</body>
</html>
