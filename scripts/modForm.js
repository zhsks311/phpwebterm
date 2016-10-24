function modSubmit(){
    if(document.joinForm.i_pass.value=='')
        alert("비밀번호를 입력해주시기 바랍니다.");
    else if(document.joinForm.i_name.value=='')
        alert("이름을 입력해주시기 바랍니다.");
    else if(document.joinForm.i_email_1.value=='' || document.joinForm.i_email_2.value=='')
        alert("이메일를 제대로 입력해주시기 바랍니다.");
    else if(document.joinForm.i_pass.value != document.joinForm.i_pass_chk.value)
        alert("비밀번호가 일치하지 않습니다.");
    else
        alert("수정되었습니다.");
}
