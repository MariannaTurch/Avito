function save() {
    var gh = "https://ih1.redbubble.net/image.109336634.1604/flat,550x550,075,f.u1.jpg"

    var a  = document.createElement('a');
    a.href = gh;
    a.download = 'image.png';

    a.click()
    
}