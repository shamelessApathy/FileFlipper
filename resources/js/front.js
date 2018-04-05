$(function(){
	var Front = function(){
		this.init = function(){
			this.fileSelect = $('#file-type');
			this.imageForm = $('#image-form');
			this.videoForm = $('#video-form');
			console.log(this.imageForm);
		}
		this.listeners = function()
		{
			this.fileSelect.on('change', this.showFormTwo);
		}
		this.showFormTwo = function(e)
		{
			var type = e.target.value;
			switch(type){
				case 'image' : this.showImageForm();
				break;
				case 'sound': //
				break;
				case 'video': this.showVideoForm();
				break;
			}
		}.bind(this)
		this.showImageForm = function(){
			this.imageForm.removeClass('invisible');
		}.bind(this)
		this.showVideoForm = function(){
			this.videoForm.removeClass('invisible');
		}
		this.init();
		this.listeners();
	}

	var FrontJS = new Front();
})