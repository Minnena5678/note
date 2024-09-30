<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>กระดูกหักและข้อ</title>
    <link rel="stylesheet" href="css/blood.css">
</head>

<body>
    <div id="main-content">
        <h1 id="men">กระดูกหักและข้อ</h1>
        <div class="contact">
            <a href="#" id="brokenButton" class="Broken" data-class="b1">กระดูกหัก</a>
            <a href="#" id="sprainButton" class="Sprain" data-class="b2">ข้อเคล็ด</a>
            <a href="#" id="dislocatedButton" class="dislocated" data-class="b3">ข้อเคลื่อน</a>
        </div>
        <a class="close-b" href="index.php">ย้อนกลับ</a>
    </div>

    <!-- Section ต่าง ๆ -->
    <div class="b1" id="b1">

        <h1 id="Title">กระดูกหัก</h1>
        <p>ชนิดการหัก : แบบปิด หักโดยไม่มีการแทงทะลุ
            และแบบเปิด หักแทงทะลุออกนอก</p>

        <div class="contact-1">
            <button id="helpButton1" class="first-aid"
                onclick="openPopup('popup1'); return false;">วิธีการปฐมพยาบาลเบื้องต้น</button>
        </div>
        <div id="popup1" class="popup">
            <div class="popup-content">
                <h2>วิธีการปฐมพยาบาลเบื้องต้น</h2>
                <p>1. ให้อวัยวะส่วนที่บาดเจ็บอยู่นิ่ง ๆ และหยุดการเคลื่อนไหว</p>
                <p>2. เข้าเฝือกชั่วคราว โดยใช้วัสดุที่หาได้เช่น ไม้ ร่ม กระดาษแข็ง
                    ดามให้เหนือกว่า และต่ํากว่าจุดที่กระดูกหัก 1ข้อ</p>
                <p>3. ถ้ามีบาดแผลเปิดร่วมด้วยให้ใช้ผ้าสะอาดปิดบริเวณบาดแผลและใช้
                    ผ้าพันไว้หลวม ๆ ก่อนการดามกระดูก
                </p>
                <p>4. รีบนําส่งสถานพยาบาล</p>
                <button class="popup-close" onclick="closePopup('popup1')">ปิด</button>
            </div>
        </div>
        <div class="contact-2">
            <button id="precautionsButton1" class="precautions"
                onclick="openPopup('precautionsPopup1'); return false;">ข้อควรระวัง</button>
        </div>
        <div id="precautionsPopup1" class="popup">

            <div class="popup-content">
                <h2>ข้อควรระวัง/ข้อห้าม</h2>
                <p>1. ห้ามดึง หรือพยายามจัดส่วนของกระดูกที่หักให้เข้าท</p>
                <p>2. ถ้ากระดูกที่หักมีขนาดใหญ่ เช่น กระดูกต้นขา อาจมีอาการช็อก
                    จากการเสียเลือดมาก</p>
                <button class="popup-close" onclick="closePopup('precautionsPopup1')">ปิด</button>
            </div>
        </div>
        <a class="back-to-main" href="#">ย้อนกลับ</a>
    </div>

    <!-- c2 -->
    <div class="b2" id="b2">

        <h1 id="Title">ข้อเคล็ด</h1>
        <p>เกิดจากการเคลื่อนไหวอย่างรวดเร็ว มีการบิด หรือ การเหวี่ยงอย่างแรงตรงบริเวณข้อต่อ
            เกินกว่าข้อนั้นจะสามารถทําได้</p>
        <div class="contact-1">
            <button id="helpButton2" class="first-aid"
                onclick="openPopup('popup2'); return false;">วิธีการปฐมพยาบาลเบื้องต้น</button>
        </div>
        <div id="popup2" class="popup">
            <div class="popup-content">
                <h2>วิธีการปฐมพยาบาลเบื้องต้น</h2>
                <p>1. งดการใช้ข้อหรืออวัยวะนั้น เพื่อให้ข้อที่บาดเจ็บอยู่นิ่ง ๆ หรือ
                    เคลื่อนไหวน้อยที่สุด และจัดให้อยู่ในท่าที่สบาย โดยใช้ผ้ายืดพัน
                    รอบข้อนั้นให้แน่นพอควร </p>
                <p>2. ประคบด้วยความเย็น ใน 24 ชม. แรก หลังจากนั้นให้ประคบด้วย
                    ความร้อน</p>
                <p>3. พยายามยกข้อนั้นให้สูง ถ้าเป็นข้อมือ ข้อไหล่ ควรใช้ผ้าสามเหลี่ยม
                    คล้องแขน เพื่อลดการบวม</p>
                <p>4. นําส่งสถานพยาบาลเพื่อตรวจให้แน่ใจว่าเอ็นยึดข้อฉีกขาดอย่างเดียว
                    หรือมีกระดูกหักร่วมด้วย</p>
                <button class="popup-close" onclick="closePopup('popup2')">ปิด</button>
            </div>
        </div>

        <!-- ยังไม่มี -->
        <div class="contact-2">
            <button id="precautionsButton2" class="precautions"
                onclick="openPopup('precautionsPopup2'); return false;">ข้อควรระวัง</button>
        </div>
        <div id="precautionsPopup2" class="popup">
            <h2>ข้อควรระวัง/ข้อห้าม</h2>
            <div class="popup-content">
                <h2>สิ่งที่ควรระวัง</h2>

                <button class="popup-close" onclick="closePopup('precautionsPopup2')">ปิด</button>
            </div>
        </div>
        <a class="back-to-main" href="#">ย้อนกลับ</a>
    </div>

    <!-- c3 -->
    <div class="b3" id="b3">

        <h1 id="Title">ข้อเคลื่อน</h1>
        <p>เกิดจากการกระแทก การเหวี่ยง การบิด หรือการกระชากอย่างแรงที่ข้อนั้น</p>
        <div class="contact-1">
            <button id="helpButton1" class="first-aid"
                onclick="openPopup('popup1'); return false;">วิธีการปฐมพยาบาลเบื้องต้น</button>
        </div>
        <div id="popup3" class="popup">
            <div class="popup-content">
                <h2>วิธีการปฐมพยาบาลเบื้องต้น</h2>
                <p>1. ให้พักข้ออยู่นิ่ง ๆ อย่าพยายามดึงข้อที่เคลื่อนให้เข้าที่ </p>
                <p>2. ใช้ผ้าพยุง ดาม หรือเข้าเฝือกส่วนนั้นให้อยู่ในท่าพัก</p>
                <p>3. รีบนําส่งสถานพยาบาลโดยเร็ว</p>

                <button class="popup-close" onclick="closePopup('popup3')">ปิด</button>
            </div>
        </div>
        <div class="contact-2">
            <button id="precautionsButton3" class="precautions"
                onclick="openPopup('precautionsPopup3'); return false;">ข้อควรระวัง</button>
        </div>
        <div id="precautionsPopup3" class="popup">

            <div class="popup-content">
                <h2>ข้อควรระวัง/ข้อห้าม</h2>
                <p>ห้ามให้อาหาร ยา และน้ําทางปาก</p>
                <button class="popup-close" onclick="closePopup('precautionsPopup3')">ปิด</button>
            </div>
        </div>
        <a class="back-to-main" href="#">ย้อนกลับ</a>
    </div>

    <script src="script1.js"></script>





</body>

</html>