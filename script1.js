// ตัวแปรเพื่อบันทึกเนื้อหาที่แสดงล่าสุด
var lastShownSection = null;

window.onload = function () {
    // ซ่อนเนื้อหาทั้งหมดในตอนเริ่มต้น
    document.querySelectorAll('.c1, .c2, .c3, .c4, .c5, .b1, .b2, .b3,.v1, .v2, .v3,.d1, .d2, .d3, .d4, .section').forEach(function (section) {
        section.style.display = 'none';
    });
};

// ฟังก์ชันสำหรับแสดงเฉพาะ section ที่เลือก
function showSection(sectionId) {
    const sections = document.querySelectorAll('.c1, .c2, .c3, .c4, .c5, .b1, .b2, .b3, .v1, .v2, .v3,.d1, .d2, .d3, .d4, .section');
    sections.forEach(section => {
        section.style.display = 'none';
    });

    lastShownSection = document.getElementById(sectionId);
    if (lastShownSection) {
        lastShownSection.style.display = 'block';
    }

    document.getElementById('main-content').style.display = 'none';
}

function goBackToMain() {
    const sections = document.querySelectorAll('.c1, .c2, .c3, .c4, .c5, .b1, .b2, .b3 ,.v1, .v2, .v3,.d1, .d2, .d3, .d4,  .section');
    sections.forEach(section => {
        section.style.display = 'none';
    });

    document.getElementById('main-content').style.display = 'block';
    lastShownSection = null; // Reset the last shown section
}

document.querySelectorAll('.contact a').forEach(link => {
    link.addEventListener('click', function (event) {
        event.preventDefault();
        const sectionClass = this.getAttribute('data-class');
        showSection(sectionClass);
    });
});

document.querySelectorAll('.back-to-main').forEach(button => {
    button.addEventListener('click', function (event) {
        event.preventDefault();
        goBackToMain();
    });
});

// ฟังก์ชันเปิด popup
function openPopup(popupId) {
    console.log('Opening popup:', popupId); // เพิ่มบรรทัดนี้เพื่อตรวจสอบ
    const popups = document.querySelectorAll('.popup');
    popups.forEach(popup => {
        popup.style.display = 'none';
    });

    var popup = document.getElementById(popupId);
    if (popup) {
        popup.style.display = 'block';
    }
}

// ฟังก์ชันปิด popup
function closePopup(popupId) {
    console.log('Closing popup:', popupId); // เพิ่มบรรทัดนี้เพื่อตรวจสอบ
    var popup = document.getElementById(popupId);
    if (popup) {
        popup.style.display = 'none';
    }

    // แสดงเนื้อหาที่เกี่ยวข้องอีกครั้ง
    if (lastShownSection) {
        lastShownSection.style.display = 'block';
    } else {
        // แสดงหน้าหลักถ้าไม่มีเนื้อหาที่แสดง
        document.getElementById('main-content').style.display = 'block';
    }
}

// ฟังก์ชันปิด popup ทุกอัน
function closeAllPopups() {
    const popups = document.querySelectorAll('.popup');
    popups.forEach(popup => {
        popup.style.display = 'none';
    });

    // แสดงเนื้อหาที่เกี่ยวข้องอีกครั้ง
    if (lastShownSection) {
        lastShownSection.style.display = 'block';
    } else {
        // แสดงหน้าหลักถ้าไม่มีเนื้อหาที่แสดง
        document.getElementById('main-content').style.display = 'block';
    }
}

// ฟังก์ชันสำหรับกลับไปยังหน้าหลัก
function goBack() {
    closeAllPopups();
    goBackToMain();
}
