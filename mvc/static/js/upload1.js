/**
 * Created by ms on 2017/5/25.
 */
function Upload(url,ziduan,fileobj,imgbox,progressobj,returnimg,loadstrat,success,loadend) {
    this.url=url;
    this.ziduan=ziduan;
    this.fileobj=fileobj;
    this.imgbox=imgbox;
    this.progressobj=progressobj;
    this.size=2*1024*1024;
    this.imgarr=['jpg','jpeg','png','gif'];
    this.success=success;
    this.file={};
    this.linearr=[];
    this.errorsize=[];
    this.errortype=[];
    this.fileresult=[];
    this.returnimg=returnimg;
    this.returnimg.val("");
    this.loadstart=loadstrat;
    this.loadend=loadend;
}
   Upload.prototype={
    change:function(){
        var that=this;
        this.fileobj.change(function () {
            that.init();
            if(that.fileobj.val()==""){
                return;
            }
            if(this.files.length>3){
                alert('图片上传个数超过限制');
                return;
            }
            for(var i=0;i<this.files.length;i++) {
                if(!that.check(this.files[i])){
                   that.fileobj.val("");
                   return;
                }
            }
            for(var i=0;i<this.files.length;i++){
                that.file[i]=this.files[i];
                (function (n) {
                    that.linearr.push(function () {
                        var fileread=new FileReader();
                        fileread.readAsDataURL(that.file[n]);
                        fileread.onload=function (e) {
                            that.fileresult.push(e.target.result);
                            $('<img>').attr('src',e.target.result).appendTo(that.imgbox);
                            $.dequeue(document,'line');
                        };
                    });
                })(i)
            }
            that.linearr.push(function () {
                that.uploadfile();
            })
            $.queue(document, 'line', that.linearr); // 第三个参数为数组
            $.dequeue(document,'line');
        })
    },
    init:function () {
        var that=this;
        that.file=[];
        that.linearr=[];
        that.errorsize=[];
        that.errortype=[];
        that.fileresult=[];
        that.imgbox.html("");
        that.returnimg.val("");
        that.progressobj.css("width","0");
    },
    check:function(file){
        if(file.size>this.size){
            alert("图片过大！");
            return false;
        }
        if(!this.imgarr.includes(file.name.split('.')[1])){
            alert("文件格式不正确");
            return false;
        }
        return true;
    },
    uploadfile:function(){
        var that=this;
        var formdate=new FormData();
        for(var i=0;i<this.file.length;i++){
            formdate.append(this.ziduan+'[]',this.file[i]);
        }
        $.ajax({
            url: this.url,
            type: 'POST',
            cache: false,
            data: formdate,
            processData: false,
            contentType: false,
            xhr:function () {
                var ajax = jQuery.ajaxSettings.xhr();
                ajax.upload.onloadstart=function () {
                    that.loadstart();
                }
                ajax.upload.onprogress=function (e) {
                    var per=e.loaded/e.total*100;
                    that.progressobj.css("width",per+'%');
                };
                ajax.upload.onloadend=function () {
                    that.loadend();
                }
                return ajax;
            }
        }).done(function(res) {
             that.success(res);
        }).fail(function(res) {
            that.init();
            alert('上传失败，请重新上传');
        })
    }
}
