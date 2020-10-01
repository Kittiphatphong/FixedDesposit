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
    <style>

  body {
  margin: 0;
  padding:0;
  font-family: "Phetsarath OT";
  }
  .hero-image {
  background-image:url("../../../app-assets/images/pages/Theme.png");
  background-color: #cccccc;
  height: 1080px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
  }

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}
div.absolute {
  position: absolute;
  top: 125px;
  right: 260px;
  width: 200px;
  height: 100px;
  
}
.name-style{
    font-size:50px;
    position: absolute;
    bottom: 9px;
    right: 200px;
    width: 680px;
    height: 100px;
    font-weight: bold;
    color: #6F2B8B;
    
}
.spin{
    position: absolute;
    top: 142px;
    right: 0px;
    width: 200px;
    height: 100px;
}
select{
    background-color: #6F2B8B;
    padding:5px;
    color: #FFCE03;
    font-size:50px;
    font-weight: bold;
    border:1px solid #6F2B8B;
    -moz-appearance: none;
    -webkit-appearance: none;
}
.f{
    color: #FFCE03;  
}
option{
    color:yellow;
}
.list{
    position: absolute;
    top: 280px;
    right: 0px;
    width: 700px;
    height: 520px;
    color:white;
    font-size:24px;
    overflow: auto;
}
.count{
    position: absolute;
    top: 225px;
    right: 290px;
    color: #FFCE03; 
    font-size:26px;
    font-weight: bold;
}
.colJ-9 {
  -webkit-box-flex : 0;
  -webkit-flex : 0 0 33.33333%;
      -ms-flex : 0 0 33.33333%;
          flex : 0 0 33.33333%;
  max-width : 29.858%;
}
    </style>

</head>

<body>

    <div class="hero-image">
    <div class="col-2 absolute">
                    <select  id="amount" >
                      <option value="1000000">{{number_format(1000000)}} ກີບ</option>
                      <option value="5000000">{{number_format(5000000)}} ກີບ</option>
                      <option value="30000000">{{number_format(30000000)}} ກີບ</option>
                      <option value="50000000">{{number_format(50000000)}} ກີບ</option>
                    </select>
                    </div>
                    <div class="list colJ-9">
  
                   </div>  
                   <p class="count"></p> 
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
                    <div class="spin">
                    <button type="button" class="btn btn-light btn-lg float-right" id="btn-example2"><b>ເລີ່ມ​ໝຸນ</b></button>
                    </div>
                    <div class="name name-style">
                   
                   </div>            
     </div>
     </div>
           
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="../../../app-assets/js/slotmachine.min.js"></script>
    <script src="../../../app-assets/js/jquery.cookie.js"></script>
    <script src="../../../app-assets/js/list.js"></script>
    <script type="text/javascript">
    var list = new cookieList("MyItems");
    $('.list').html(list.items());
    $('#amount').click(function() {
    list.clear();
    });
        $('#btn-example2').click(function() {
            
          $('.name').empty();
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
                //   time: 569,
                time: 1,
              
                  stopSeq: 'leftToRight',
                  onEnd: function() {
                    ding.play(); // Play ding after each number is stopped
                },
                  onFinish: function() {
                   
                    sound.pause(); // To stop the looping sound is pause it
                    var list = new cookieList("MyItems");
                    list.remove(''); 
                    var jay =data.list.toString();
                    list.add(jay); 
                    $('.list').html(list.items());
                    $('.name').html(data.name);
                    $('.count').html(list.items().length);
                    
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
