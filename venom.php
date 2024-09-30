<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>>สัตว์กัดต่อย ผื่น แพ้และของร้อน</title>
    <link rel="stylesheet" href="css/blood.css">

</head>

<body>

    <div id="main-content">
        <h1 id="men">สัตว์กัดต่อย ผื่น แพ้และของร้อน</h1>
        <div class="contact">
            <a href="#" id="bugdButton" class="bug" data-class="v1">แมลงกัดต่อย</a>
            <a href="#" id="lostButton" class="lost" data-class="v2">ผื่นแพ้</a>
            <a href="#" id="hotButton" class="hot" data-class="v3">ถูกไฟไหม้ หรือน้ำร้อนลวก</a>
        </div>
        <a class="close-b" href="index.php">ย้อนกลับ</a>
    </div>

    <!-- Section ต่าง ๆ -->
    <div class="v1" id="v1">
        <h1 id="Title">แมลงกัดต่อย</h1>
        <p>มีผู้ป่วยเจ็บบางรายอาจเกิดอาการแพ้อย่างรุนแรง มีผื่นขึ้นตามตัว หรือเป็นมากจนหายใจไม่ออก ทําให้เสียชีวิตได้
        </p>
        <div class="contact-1">
            <button id="helpButton1" class="first-aid"
                onclick="openPopup('popup1'); return false;">วิธีการปฐมพยาบาลเบื้องต้น</button>
        </div>
        <div id="popup1" class="popup">
            <div class="popup-content">
                <h2>วิธีการปฐมพยาบาลเบื้องต้น</h2>
                <p style="font-weight: bold; font-size: 20px;">ผึ้ง ต่อ แตน มด</p>
                <p>1.ใช้ลูกกุญแจที่มีรูกดตรงจุดที่ถูกต่อย แล้วใช้ที่หนีบคีบเอาเหล็กในออก</p>
                <p>2. กดหรือบีบบาดแผลไล่น้ำพิษออก ทำความสะอาดด้วยน้ำกับสบู่</p>
                <p>3. ใช้สำลีชุมแอมโมเนีย หรือยาหม่องทาบริเวณแผล</p>
                <p>4. ใช้น้ำแข็งประคบบริเวณแผล เพื่อระงับอาการปวดและช่วยลดการซึมซาบของพิษ</p>
                <p>5. สังเกตดูอาการ ถ้าไม่ดีขึ้นรีบพาไปพบแพทย์</p>
                <br>
                <p style="font-weight: bold; font-size: 20px;">แมลงก้นกระดก</p>
                <p>1. ห้ามตี หรือขยี้ด้วยมือเปล่า เพราะจะทำให้พิษสัมผัสกับผิวหนัง</p>
                <p>2. ห้ามสัมผัสผิวบริเวณที่ถูกกัดโดยตรง และรีบล้างด้วยน้ำสะอาดโดยเร็วที่สุด</p>
                <p>3. ประคบเย็นบริเวณที่สัมผัสกับแมลงโดยตรง</p>
                <p>4. หากผื่นรุนแรงขึ้นให้รีบพบแพทย์เพื่อทำการรักษา และรับคำแนะนำในทันที</p>
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
                <p>1. ห้ามละเลยอาการแพ้รุนแรง</p>
                <p>2. ห้ามใช้ความร้อนประคบแผล</p>
                <p>3. ห้ามใช้แรงดึงหรือบีบออก ควรใช้ของแบนๆ เช่น ขอบบัตรเครดิต ค่อยๆ
                    กวาดเหล็กในออกจากผิวหนังอย่างระมัดระวัง</p>
                <button class="popup-close" onclick="closePopup('precautionsPopup1')">ปิด</button>
            </div>
        </div>
        <a class="back-to-main" href="#">ย้อนกลับ</a>
    </div>
    <!-- https://www.southeastlife.co.th/blog/detail/poisonous-bug-bite -->

    <div class="v2" id="v2">

        <h1 id="Title">ผื่นแพ้</h1>
        <p>การมีผื่นแพ้เกิดขึ้นได้จากหลายสาเหตุ ทั้งจากสารก่อภูมิแพ้ในอาหาร ยา สารเคมี แมลงกัดต่อย หรือสิ่งแวดล้อม</p>
        <div class="contact-1">
            <button id="helpButton2" class="first-aid"
                onclick="openPopup('popup2'); return false;">วิธีการปฐมพยาบาลเบื้องต้น</button>
        </div>
        <div id="popup2" class="popup">
            <div class="popup-content">
                <h2>วิธีการปฐมพยาบาลเบื้องต้น</h2>
                <p>1.ผื่นคันทั่วไป ใช้โลชั่นทาตามร่างกายเพื่อบรรเทาอาการคันจากผื่นขึ้นที่ตัวเบื้องต้นได้</p>
                <p>2.ผื่นภูมิแพ้ผิวหนัง อาบน้ำล้างเหงื่อหรือฝุ่นออก
                    กินยาแก้แพ้กลุ่มแอนตี้ฮีสตามีนและหลีกเลี่ยงการใส่เสื้อผ้ารัดรูป เพราะจะยิ่งทำให้เกิดการเสียดสี
                    กระตุ้นให้เกิดการแพ้มีผื่นขึ้นตามตัวและคันมากขึ้น</p>
                <p>3.ผื่นแพ้สัมผัส สังเกตว่าเกิดผื่นแพ้หลังจากสัมผัสสิ่งใด
                    และหลีกเลี่ยงสารที่ก่อให้เกิดอาการผื่นแพ้สัมผัส ใช้ยากลุ่มสเตียรอยด์ หากมีอาการคันร่วมด้วย
                    สามารถรับประทานยาแก้แพ้ร่วมได้ </p>
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

                <p>1. ไม่เกาผื่น</p>
                <p>2. ไม่ควรใช้ยาทาแก้ผื่นเองโดยไม่ได้รับคำแนะนำจากแพทย์หรือเภสัชกร</p>
                <p>3. หลีกเลี่ยงการสัมผัสความร้อนและแสงแดดจัด</p>
                <p>4. หากผื่นแพ้มีอาการแย่ลง ควรรีบไปพบแพทย์ทันที</p>
                <button class="popup-close" onclick="closePopup('precautionsPopup2')">ปิด</button>
            </div>
        </div>
        <a class="back-to-main" href="#">ย้อนกลับ</a>
    </div>

    <!-- c3 -->
    <div class="v3" id="v3">

        <h1 id="Title">ถูกไฟไหม้ หรือน้ำร้อนลวก</h1>
        <p>เกิดจากการถูกกระแทก อาจมีการฉีกขาดของเนื้อเยื่อใต้ผิวหนัง</p>
        <div class="contact-1">
            <button id="helpButton3" class="first-aid"
                onclick="openPopup('popup3'); return false;">วิธีการปฐมพยาบาลเบื้องต้น</button>
        </div>
        <div id="popup3" class="popup">
            <div class="popup-content">
                <h2>วิธีการปฐมพยาบาลเบื้องต้น</h2>
                <p>1. ล้างด้วยน้ำสะอาดที่อุณหภูมิปกติ เพื่อลดความร้อนให้มากที่สุด</p>
                <p>2. หลังจากนั้นซับด้วยผ้าแห้งสะอาด แล้วสังเกตว่าถ้าผิวหนังมีรอยถลอก
                    มีตุ่มพองใสหรือมีสีของผิวหนังเปลี่ยนไป ควรรีบไปพบแพทย์</p>
                <p>3. หากมีแผลบริเวณใบหน้า จะต้องได้รับการรักษาจากแพทย์โดยเร็วที่สุด </p>

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
                <p>1. ไม่ควรใส่ตัวยา/สารใด ๆ ทาลงบนบาดแผล เช่น ยาสีฟัน น้ำปลา เนย ฯ</p>
                <p>2. ห้ามเจาะหรือแกะถุงน้ำที่พองขึ้น</p>
                <p>3. ห้ามใช้น้ำแข็งหรือถุงน้ำแข็งประคบแผลโดยตรงหรือแผลที่พึ่งดดนความร้อนมา</p>
                <p>4. ห้ามให้ผู้ป่วยรับประทานอาหารหรือดื่มน้ำหากมีแผลไฟไหม้ที่รุนแรง</p>
                <button class="popup-close" onclick="closePopup('precautionsPopup3')">ปิด</button>
            </div>
        </div>
        <a class="back-to-main" href="#">ย้อนกลับ</a>
    </div>




    <script src="script1.js"></script>



</body>

</html>