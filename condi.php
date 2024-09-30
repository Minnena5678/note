condi.php
<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ภาวะฉุกเฉินทางอายุรกรรม</title>
    <link rel="stylesheet" href="css\blood.css">

</head>

<body>
    <div id="main-content">
        <h1 id="men">ภาวะฉุกเฉินทางอายุรกรรม</h1>
        <div class="contact">
            <a href="#" id="chokingButton" class="choking" data-class="d1">การสำลัก</a>
            <a href="#" id="whipButton" class="whip" data-class="d2">ชัก</a>
            <a href="#" id="heatstrokeButton" class="heatstroke" data-class="d3">ลมแดดหรือฮีทสโตรก </a>
            <a href="#" id="shockButton" class="shock" data-class="d4">ช็อก</a>
        </div>
        <a class="close-b" href="index.php">ย้อนกลับ</a>
    </div>
  

    <div class="d1" id="d1">
        <h1 id="Title">การสำลัก</h1>
        <p>มี 2 กรณี มีสติและไม่มีสติ</p>
        <div class="contact-1">
            <button id="helpButton1" class="first-aid"
                onclick="openPopup('popup1'); return false;">วิธีการปฐมพยาบาลเบื้องต้น</button>
        </div>
        <div id="popup1" class="popup">
            <div class="popup-content">
                <h2>วิธีการปฐมพยาบาลเบื้องต้น</h2>
                <p>1.กรณีที่ผู้ป่วยเจ็บยังไม่หมดสติ <br> รัดกระตุกที่ท้องเหนือสะดือ
                    ใต้ลิ้นปี่ในทิศทางเฉียงขึ้นโดยให้ผู้ทําการช่วยเหลือเข้าไปข้างหลังผู้ป่วยเจ็บ
                    ที่กําลังยืนอยู่มือซ้ายกําหมัดไว้ตรงหน้าท้องระหว่างสะดือกับลิ้นปี่ของ
                    ผู้ป่วย มือขวากํารอบกําปั้นซ้ายหรือใช้วิธีประสานมือ 2 ข้างเข้าด้วยกัน
                    แล้วรัดกระตุกเข้าหาตัวผู้ช่วยเหลืออย่างแรงหลาย ๆ ครั้ง จนพูดออกมาได้</p>
                    <p>2.กรณีที่ผู้ป่วยเจ็บหมดสติ <br> จัดผู้ป่วยเจ็บในท่านอนหงายราบ นั่งคร่อม
                    แล้วใช้ส้นมือทั้งสองข้างวางซ้อนกัน กดกระแทกที่ท้องเหนือสะดือใต้
                    ลิ้นปี่ในทิศทางเฉียงขึ้นไปทางศีรษะผู้ป่วยเจ็บ ทํา 5 ครั้งแล้วเปิดปาก
                    ผู้ป่วยเจ็บ หากเห็นสิ่งแปลกปลอมให้ล้วงออก ห้ามล้วงโดยไม่เห็น
                    จากนั้นจึงตรวจการหายใจและเริ่มต้นการกู้ชีพ</p>
                <button class="popup-close" onclick="closePopup('popup1')">ปิด</button>
            </div>
        </div>

        <div class="contact-2">
            <button id="precautionsButton1" class="precautions"
                onclick="openPopup('precautionsPopup1'); return false;">ข้อควรระวัง</button>
        </div>
        <div id="precautionsPopup1" class="popup">
            <div class="popup-content">
             <h2>ข้อควรระวัง</h2>
             <p>ระวังการใช้แรงที่มากหรือน้อยเกินไปกับผู้ป่วยที่อายุและสรีระต่างกัน</p>
             <div class="video-container">
            <iframe  src="https://www.youtube.com/embed/3meNRTjyrRQ" frameborder="0" allowfullscreen></iframe>
            </div>
            <button class="popup-close" onclick="closePopup('precautionsPopup1')">ปิด</button>
            </div>
        </div>
        <a class="back-to-main" href="#">ย้อนกลับ</a>
    </div>

    
    <div class="d2" id="d2">
        <h1 id="Title">ชัก</h1>
        <p>ยังไม่มีวิธีใดที่สามารถหยุดอาการชักได้ นจึงต้องปล่อยให้อาการชักดําเนินต่อไปจน
            สิ้นสุดระยะของอาการเอง</p>
        <div class="contact-1">
            <button id="helpButton2" class="first-aid"
                onclick="openPopup('popup2'); return false;">วิธีการปฐมพยาบาลเบื้องต้น</button>
        </div>
        <div id="popup2" class="popup">
            <div class="popup-content">
                <h2>วิธีการปฐมพยาบาลเบื้องต้น</h2>
                <p>1. ป้องกันการบาดเจ็บจากการล้ม </p>
                <p>2. ให้ผู้ป่วยเจ็บนอนตะแคงเอียงหน้าลงกับพื้นในท่าเงยคางขึ้น</p>
                <p>3. ดูแลการหายใจ เช็ดหรือดูดเสมหะ น้ําลาย และสิ่งอาเจียนออก</p>
                <p>4. นําส่งสถานพยาบาล</p>
                <button class="popup-close" onclick="closePopup('popup2')">ปิด</button>
            </div>
        </div>
        <div class="contact-2">
            <button id="precautionsButton2" class="precautions"
                onclick="openPopup('precautionsPopup2'); return false;">ข้อควรระวัง</button>
        </div>
        <div id="precautionsPopup2" class="popup">
            <div class="popup-content">
                <h2>ข้อควรระวัง/ข้อห้าม</h2>
                <p>1. ห้ามเอาสิ่งของ หรือวัตถุยัดเข้าไปในปากโดยเด็ดขาด</p>
                <p>2. ห้ามมัดหรือต่อสู้กับผู้ที่กําลังชัก</p>
                <p>3. อย่าทิ้งผู้ป่วยเจ็บไว้ตามลําพัง เพื่อไปตามผู้อื่น</p>
                <p>4. งดอาหารและน้ําระหว่างการชัก และหลังจากชักใหม่ๆ</p>
                <button class="popup-close" onclick="closePopup('precautionsPopup2')">ปิด</button>
            </div>
        </div>
        <a class="back-to-main" href="#">ย้อนกลับ</a>
    </div>

    <div class="d3" id="d3">
        <h1 id="Title">ลมแดดหรือฮีทสโตรก</h1>
        <div class="contact-1">
            <button id="helpButton3" class="first-aid"
                onclick="openPopup('popup3'); return false;">วิธีการปฐมพยาบาลเบื้องต้น</button>
        </div>
        <div id="popup3" class="popup">
            <div class="popup-content">
                <h2>วิธีการปฐมพยาบาลเบื้องต้น</h2>
                <p>1. นําผู้ป่วยเจ็บเข้าที่ร่ม หรือสภาพแวดล้อมที่มีอากาศเย็นหรืออากาศ
                    ถ่ายเทสะดวก</p>
                <p>2. ถอดเสื้อผ้า หรือปลดกระดุม เพื่อให้ร่างกายระบายความร้อนได้อย่างรวดเร็ว</p>
                <p>3. ทําการระบายความร้อน โดยเช็ดตัวด้วยผ้าชุบน้ําอุณหภูมิปกติ
                    และพัดระบายความร้อนทั่วตัว</p>
                <p>4. นําส่งสถานพยาบาลโดยเร็วที่สุด และทําการระบายความร้อน
                    ตลอดเวลาระหว่างการนําส่ง</p>
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
                <p>1. หากผู้ป่วยยังมีสติและสามารถดื่มน้ำได้เอง อาจให้จิบเครื่องดื่มเกลือแร่หรือน้ำทีละน้อย ห้ามให้ดื่มน้ำที่มีส่วนผสมของคาเฟอีน</p>
                <p>2. ห้ามให้ดื่มน้ำถ้าหมดสติหรือควบคุมตัวเองไม่ได้</p>
                <p>3. ติดตาม การตอบสนอง อุณหภูมิร่างกาย และสัญญาณชีพตลอด</p>
                <p>4. อย่าทิ้งผู้ป่วยเจ็บไว้ตามลําพัง เพื่อไปตามผู้อื่น</p>
               
                <button class="popup-close" onclick="closePopup('precautionsPopup3')">ปิด</button>
            </div>
        </div>
        <a class="back-to-main" href="#">ย้อนกลับ</a>
    </div>
    </div>
        

    <div class="d4" id="d4">
        <h1 id="Title">ช็อก</h1>
        <p>เป็นภาวะที่เลือดไปเลี้ยงอวัยวะต่าง ๆ ได้ไม่เพียงพอ อาจมีสาเหตุจากการเสียน้ํา เสียเลือด หัวใจล้มเหลว แพ้อย่างรุนแรง หรือจากการเจ็บปวดอย่างรุนแรง</p>
        <div class="contact-1">
            <button id="helpButton4" class="first-aid"
                onclick="openPopup('popup4'); return false;">วิธีการปฐมพยาบาลเบื้องต้น</button>
        </div>
        <div id="popup4" class="popup">
            <div class="popup-content">
                <h2>วิธีการปฐมพยาบาลเบื้องต้น</h2>
                <p>1. จัดให้นอนหงายราบไม่หนุนหมอน ตะแคงหน้า เพื่อป้องกันการ
                สําลักน้ําลายหรืออาเจียน ยกปลายเท้าให้สูงประมาณ 1 ฟุต </p>
                <p>2. แก้ไขสาเหตุช็อกเช่น ถ้ามีเลือดออกให้ห้ามเลือด</p>
                <p>3. รีบนําส่งสถานพยาบาล</p>
                <button class="popup-close" onclick="closePopup('popup4')">ปิด</button>
            </div>
        </div>
        <div class="contact-2">
            <button id="precautionsButton4" class="precautions"
                onclick="openPopup('precautionsPopup4'); return false;">ข้อควรระวัง</button>
        </div>
        <div id="precautionsPopup4" class="popup">
            <div class="popup-content">
                <h2>ข้อควรระวัง/ข้อห้าม</h2>
                <p>1. ตรวจชีพจรอยู่ตลอด หากไม่มี ให้เริ่มทำการปั๊มหัวใจ (CPR) ทันที</p>
                <p>2. อย่าเคลื่อนย้ายผู้ป่วยหากไม่จำเป็น</p>
                <p>3. หากผู้ป่วยหมดสติและมีอาการตัวเย็น ควรหาผ้าห่มหรือผ้าปูที่นอนห่อหุ้มเพื่อช่วยรักษาอุณหภูมิของร่างกาย</p>
                <p>4. อย่าพยายามปลุกผู้ป่วยที่หมดสติด้วยการตบหน้า หรือใช้แรงใดๆ</p>
                <p>คลิปสอน CPR </p>
                <div class="video-container">
                <iframe src="https://www.youtube.com/embed/iMyW4d4UNGU?si=SLDe_vBlQgWsspjl" frameborder="0" allowfullscreen></iframe>
                    </div>
                <button class="popup-close" onclick="closePopup('precautionsPopup4')">ปิด</button>
            </div>
    </div>
    <a class="back-to-main" href="#">ย้อนกลับ</a>
    </div>

    

    <script src="script1.js"></script>
</body>

</html>