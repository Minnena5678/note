<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>บาดแผลทั่วไป</title>
    <link rel="stylesheet" href="css/blood.css">
</head>

<body>
    <!-- หน้าหลัก -->
    <div id="main-content">
        <h1 id="men">บาดแผลทั่วไป</h1>
        <div class="contact">
            <a href="#" id="nosebleedButton" class="nosebleed" data-class="c1">เลือดกำเดาไหล</a>
            <a href="#" id="abrasionButton" class="abrasion" data-class="c2">แผลถลอก</a>
            <a href="#" id="staleButton" class="stale" data-class="c3">แผลฟกช้ํา</a>
            <a href="#" id="knifeButton" class="knife" data-class="c4">แผลถูกของมีคม</a>
            <a href="#" id="pin-itButton" class="pin-it" data-class="c5">แผลวัตถุปักคา</a>
        </div>
        <a class="close-b" href="index.php">ย้อนกลับ</a>
    </div>

    <!-- Section ต่าง ๆ -->
    <div class="c1" id="c1">

        <h1 id="Title">เลือดกำเดาไหล</h1>
        <p>อาจเกิดจากอุบัติเหตุ อากาศแห้ง ความดันโลหิตสูง เป็นหวัด</p>
        <div class="contact-1">
            <button id="helpButton1" class="first-aid"
                onclick="openPopup('popup1'); return false;">วิธีการปฐมพยาบาลเบื้องต้น</button>
        </div>
        <div id="popup1" class="popup">
            <div class="popup-content">
                <h2>วิธีการปฐมพยาบาลเบื้องต้น</h2>
                <p>1. ให้ผู้ป่วยนั่งนิ่ง ๆ เอนตัวไปข้างหน้าเล็กน้อย</p>
                <p>2. ใช้มือบีบจมูกและให้หายใจทางปาก ประมาณ 5-10 นาที</p>
                <p>3. ถ้ามีเลือดออกมาก ให้บ้วนเลือดหรือน้ำลายลงในอ่างหรือภาชนะที่รองรับ</p>
                <p>4. เมื่อเลือดหยุดแล้ว ใช้ผ้าสะอาดเช็ดบริเวณจมูกและปาก</p>
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
                <p>1. ห้ามสั่งน้ำมูก หรือล้วงแคะ ขยี้จมูก เพราะจะทำให้อาการแย่ลง</p>
                <p>2. ในผู้ป่วยเจ็บที่ได้รับอุบัติเหตุถ้ามีน้ําใส ๆ ไหลจากจมูก ให้รีบนําส่งสถานพยาบาล</p>
                <button class="popup-close" onclick="closePopup('precautionsPopup1')">ปิด</button>
            </div>
        </div>
        <a class="back-to-main" href="#">ย้อนกลับ</a>
    </div>

    <!-- c2 -->
    <div class="c2" id="c2">

        <h1 id="Title">แผลถลอก</h1>
        <div class="contact-1">
            <button id="helpButton2" class="first-aid" onclick="openPopup('popup2'); return false;">การปฐมพยาบาล
            </button>
        </div>
        <div id="popup2" class="popup">
            <div class="popup-content">
                <h2>วิธีการปฐมพยาบาลเบื้องต้น</h2>
                <p>1. ล้างแผลด้วยน้ําสะอาดและสบู่จนหมดสิ่งสกปรก </p>
                <p>2. ใช้ผ้าสะอาดกดที่แผลเพื่อให้เลือดหยุด</p>
                <p>3. ใส่ยาสําหรับแผลสด เช่น เบตาดีน อาจปิดแผลหรือไม่ก็ได้ </p>
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
                <h2>สิ่งที่ควรระวัง</h2>
                <p>1. แผลที่มีขนาดใหญ่ อาจต้องรับประทานยาปฏิชีวนะเพื่อป้องกันการติดเชื้อ</p>
                <p>2. ไม่ควรให้แผลเปียกน้ําจนกว่าแผลจะแห้ง เพื่อป้องกันการติดเชื้อ</p>
                <p>3. ไม่ควรแกะหรือเกาบาดแผลที่แห้งตกสะเก็ดแล้ว</p>
                <button class="popup-close" onclick="closePopup('precautionsPopup2')">ปิด</button>
            </div>
        </div>
        <a class="back-to-main" href="#">ย้อนกลับ</a>
    </div>

    <!-- c3 -->
    <div class="c3" id="c3">

        <h1 id="Title">แผลฟกช้ํา</h1>
        <p>เกิดจากการถูกกระแทก อาจมีการฉีกขาดของเนื้อเยื่อใต้ผิวหนัง</p>
        <div class="contact-1">
            <button id="helpButton3" class="first-aid" onclick="openPopup('popup3'); return false;">การปฐมพยาบาล
            </button>
        </div>
        <div id="popup3" class="popup">
            <div class="popup-content">
                <h2>วิธีการปฐมพยาบาลเบื้องต้น</h2>
                <p>1. ประคบด้วยความเย็น เช่น ผ้าห่อถุงน้ําแข็งผสมน้ํา ภายใน 24 ชั่วโมงแรก
                    เพื่อห้ามเลือด</p>
                <p>2. หลัง 24 ชั่วโมง ประคบด้วยความร้อน เพื่อลดอาการช้ําบวม </p>
                <p>3. ถ้าบาดแผลฟกช้ำเกิดขึ้นกับอวัยวะที่ต้องมีการเคลื่อนไหวอยู่เสมอ เช่น ข้อมือ ข้อเท้า ข้อศอก </p>
                <p>4. ให้ใช้ผ้าพันแผลชนิดเป็นม้วนที่ยืดหยุ่นได้พันรอบข้อเหล่านั้นให้แน่นพอสมควร
                    เพื่อช่วยให้อวัยวะที่มีบาดแผลอยู่นิ่ง ๆ</p>
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
                <p>1. รอยฟกช้ําภายนอก อาจมาพร้อมกับการบาดเจ็บของอวัยวะภายใน</p>
                <p>2. ถ้ารอยฟกช้ำมีความลึก อาจต้องไปหาหมอเพื่อตรวจ</p>
                <p>3. การใช้ความร้อนควรระมัดระวังเพื่อไม่ให้แผลร้อนเกินไป</p>
                <button class="popup-close" onclick="closePopup('precautionsPopup3')">ปิด</button>
            </div>
        </div>
        <a class="back-to-main" href="#">ย้อนกลับ</a>
    </div>

    <!-- c4 -->
    <div class="c4" id="c4">
        <h1 id="Title">แผลถูกของมีคม</h1>
        <div class="contact-1">
            <button id="helpButton4" class="first-aid" onclick="openPopup('popup4'); return false;">การปฐมพยาบาล
            </button>
        </div>
        <div id="popup4" class="popup">
            <div class="popup-content">
                <h2>วิธีการปฐมพยาบาลเบื้องต้น</h2>
                <p>1. ล้างแผลด้วยน้ำสะอาดและสบู่</p>
                <p>2. ใช้ผ้าสะอาดหรือผ้าพันแผลพันแผลให้แน่นเพื่อห้ามเลือด</p>
                <p>3. ถ้าบาดแผลมีความลึกหรือกว้างให้ไปหาหมอ</p>
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
                <p>1. หากมีการบาดเจ็บที่ลึก ควรไปพบแพทย์เพื่อตรวจสอบ</p>
                <p>2. ควรให้การรักษาทันทีเพื่อป้องกันการติดเชื้อ</p>
                <button class="popup-close" onclick="closePopup('precautionsPopup4')">ปิด</button>
            </div>
        </div>
        <a class="back-to-main" href="#">ย้อนกลับ</a>
    </div>

    <!-- c5 -->
    <div class="c5" id="c5">
        <h1 id="Title">แผลวัตถุปักคา</h1>
        <div class="contact-1">
            <button id="helpButton5" class="first-aid" onclick="openPopup('popup5'); return false;">การปฐมพยาบาล
            </button>
        </div>
        <div id="popup5" class="popup">
            <div class="popup-content">
                <h2>วิธีการปฐมพยาบาลเบื้องต้น</h2>
                <p>1. ไม่ควรดึงวัตถุที่ติดอยู่ในบาดแผลออก</p>
                <p>2. ใช้ผ้าสะอาดหรือผ้าพันแผลพันรอบแผลเพื่อลดการเคลื่อนไหวของวัตถุ</p>
                <p>3. รีบนำผู้ป่วยไปโรงพยาบาลเพื่อให้แพทย์ถอนวัตถุ</p>
                <button class="popup-close" onclick="closePopup('popup5')">ปิด</button>
            </div>
        </div>
        <div class="contact-2">
            <button id="precautionsButton5" class="precautions"
                onclick="openPopup('precautionsPopup5'); return false;">ข้อควรระวัง</button>
        </div>
        <div id="precautionsPopup5" class="popup">

            <div class="popup-content">
                <h2>ข้อควรระวัง/ข้อห้าม</h2>
                <p>1. ควรหลีกเลี่ยงการเคลื่อนไหวเพื่อป้องกันความเสียหายที่เกิดจากการเคลื่อนที่ของวัตถุ</p>
                <p>2. ควรนำส่งโรงพยาบาลเพื่อการรักษาอย่างรวดเร็ว</p>
                <button class="popup-close" onclick="closePopup('precautionsPopup5')">ปิด</button>
            </div>
        </div>
        <a class="back-to-main" href="#">ย้อนกลับ</a>
    </div>




    <script src="script1.js"></script>
</body>

</html>