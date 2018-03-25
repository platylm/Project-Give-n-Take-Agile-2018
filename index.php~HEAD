<html>
<head>
    <meta charset="UTF-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/paho-mqtt/1.0.1/mqttws31.js" type="text/javascript"></script>
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <script type="text/javascript">
        //sample HTML/JS script that will publish/subscribe to topics in the Google Chrome Console
        //by Matthew Bordignon @bordignon on twitter.
        var wsbroker = "46.101.48.109";  //mqtt websocket enabled broker
        var wsport = 9001;// port for above
        var obj;
        var client = new Paho.MQTT.Client(wsbroker, wsport,
            "myclientid_" + parseInt(Math.random() * 100, 10));
        client.onConnectionLost = function (responseObject) {
            console.log("connection lost: " + responseObject.errorMessage);
        };
        var doc = {};
        client.onMessageArrived = function (message) {
            //console.log(message.destinationName, ' -- ', message.payloadString);
            obj = JSON.parse(message.payloadString);
            if (obj.d) {
                $(document).ready(function () {
                    $(".zoom").each(function () {
                        $('#' + id).attr("data-content", " ");
                        var id = $(this).attr("id");
                        if (obj.d.myName == id) {
                            console.log("hhh" + id);
                            $('#' + id).attr("data-content", obj.d.temperature + "   ํC");
                        }
                    });
                });
                /*                console.log("temperature : ", obj.d.myName);
                                console.log("temperature : ", obj.d.temperature);
                                console.log("humidity : ", obj.d.humidity);
                                console.log("pressure : ", obj.d.pressure);
                                console.log("----------------");*/
            }

            // if (obj.d) {
            //   if (doc[obj.d.myName] === undefined) {
            //       doc[obj.d.myName] = {
            //           temperature: ""
            //       };
            //   }
            //   doc[obj.d.myName].temperature = obj.d.temperature;
            //   sessionStorage.data[obj.d.myName].temperature = obj.d.temperature;
            //   console.log(doc);
            // }

        };
        var options = {
            timeout: 3,
            onSuccess: function () {
                console.log("mqtt connected");
                // Connection succeeded; subscribe to our topic, you can add multile lines of these
                client.subscribe('KKU/#', {qos: 1});

                // //use the below if you want to publish to a topic on connect
                // message = new Paho.MQTT.Message("Hello");
                // message.destinationName = "KKU/1";
                // client.send(message);

            },
            onFailure: function (message) {
                console.log("Connection failed: " + message.errorMessage);
            }
        };

        function init() {
            client.connect(options);
        }

    </script>
    <style>
        body {
            background-image: url("../pic/fire.jpg");
            background-position: center;
        }

        #img {
            /*   background: aliceblue;
               border: 2px solid white;
               border-radius: 5px;*/
            margin: 5px;
            text-align: center;
        }

        .zoom {
        }

        .zoom:hover {
            -ms-transform: scale(1.5); /* IE 9 */
            -webkit-transform: scale(1.5); /* Safari 3-8 */
            transform: scale(1.5);
        }
    </style>
</head>
<body onload="init();">
<div class="container">
    <header>
        <a href="index.php">
            <img src="../pic/logo.png" width="150">
        </a>
    </header>

    <div id="img">
        <a href="detail.php?id=LATTE-001">
            <img class="zoom" id="LATTE-001" title="สะพานนรก" data-placement="top" data-toggle="popover"
                 data-trigger="hover" src="../pic/icon/1.สะพานนรก.png" width="150">

        </a>
        <a href="detail.php?id=LATTE-002">
            <img class="zoom" id="LATTE-002" title="ควักลูกตา" data-placement="top" data-toggle="popover"
                 data-trigger="hover" src="../pic/icon/2.%20ควักลูกตา.png" width="150">
        </a>
        <a href="detail.php?id=LATTE-003">
            <img class="zoom" id="LATTE-003" title="ห้อยหัวลง" data-placement="top" data-toggle="popover"
                 data-trigger="hover" src="../pic/icon/3.%20ห้อยหัวลง.png" width="150">
        </a>
        <a href="detail.php?id=LATTE-004">
            <img class="zoom" id="LATTE-004" title="น้ำร้อนลวกมือ" data-placement="top" data-toggle="popover"
                 data-trigger="hover" src="../pic/icon/4.น้ำร้อนลวกมือ.png" width="150">
        </a>
        <a href="detail.php?id=LATTE-005">
            <img class="zoom" id="LATTE-005" title="ผึ้งพิษ" data-placement="top" data-toggle="popover"
                 data-trigger="hover" src="../pic/icon/5.ผึ้งพิษ.png" width="150">

            <br>
            <a href="detail.php">
                <img src="../pic/devil2.png" width="500">
            </a>
            <br>
            <a href="detail.php?id=LATTE-006">
                <img class="zoom" id="LATTE-006" title="อุมกระสุนเหล็ก" data-placement="top" data-toggle="popover"
                     data-trigger="hover" data-content="77  ํC" src="../pic/icon/6.อุมกระสุนเหล็ก.png" width="150">
            </a>
            <a href="detail.php?id=LATTE-007">
                <img class="zoom" id="LATTE-007" title="น้ำมันเดือด" data-placement="top" data-toggle="popover"
                     data-trigger="hover" data-content="77  ํC" src="../pic/icon/7.%20น้ำมันเดือด.png" width="150">
            </a>
            <a href="detail.php?id=LATTE-008">
                <img class="zoom" id="LATTE-008" title="ตัดลิ้นร้อยกราม" data-placement="top" data-toggle="popover"
                     data-trigger="hover" data-content="77  ํC" src="../pic/icon/8.%20ตัดลิ้นร้อยกราม.png" width="150">
            </a>
            <a href="detail.php?id=LATTE-009">
                <img class="zoom" id="LATTE-009" title="ตัดท่อนแขนขา" data-placement="top" data-toggle="popover"
                     data-trigger="hover" data-content="77  ํC" src="../pic/icon/9.%20ตัดท่อนแขนขา.png" width="150">
            </a>
            <a href="detail.php?id=LATTE-010">
                <img class="zoom" id="LATTE-010" title="กะทะทองแดง" data-placement="top" data-toggle="popover"
                     data-trigger="hover" data-content="77  ํC" src="../pic/icon/10.%20กะทะทองแดง.png" width="150">
            </a>

    </div>
</div>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function () {
        $('[data-toggle="popover"]').popover();
        $('[data-toggle="popover"]').show();
    });
</script>
</body>
</html>