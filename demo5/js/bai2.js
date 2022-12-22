function tinhTong(){
    //Lấy dữ liệu tự ô input nhập a
    let a = parseInt(document.getElementById('a').value);
    //Lấy dữ liệu tự ô input nhập b
    let b = parseInt(document.getElementById('b').value);
    //tinh tong a + b
    let tong = a + b;
    //hiển thị giá trị vào ô tổng
    document.getElementById('tong').value = tong;
}

function tinhHieu(){
    //Lấy dữ liệu tự ô input nhập a
    let a = parseInt(document.getElementById('a').value);
    //Lấy dữ liệu tự ô input nhập b
    let b = parseInt(document.getElementById('b').value);
    //tinh hieu a - b
    let hieu = a - b;
    //hiển thị giá trị vào ô hieu
    document.getElementById('hieu').value = hieu;
}

function tinhTich(){
    //Lấy dữ liệu tự ô input nhập a
    let a = parseInt(document.getElementById('a').value);
    //Lấy dữ liệu tự ô input nhập b
    let b = parseInt(document.getElementById('b').value);
    //tinh tich a * b
    let tich = a * b;
    //hiển thị giá trị vào ô tich
    document.getElementById('tich').value = tich;
}

function tinhThuong(){
    //Lấy dữ liệu tự ô input nhập a
    let a = parseInt(document.getElementById('a').value);
    //Lấy dữ liệu tự ô input nhập b
    let b = parseInt(document.getElementById('b').value);
    //tinh thuong a / b
    let thuong = a / b;
    //hiển thị giá trị vào ô thuong
    document.getElementById('thuong').value = thuong;
}