$(function(){
	var Front = function(){
		this.init = function(){
			this.fileSelect = $('#file-type');
			this.imageForm = $('#image-form');
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
				case 'video': //
				break;
			}
		}.bind(this)
		this.showImageForm = function(){
			this.imageForm.removeClass('invisible');
		}.bind(this)
		this.init();
		this.listeners();
	}

	var FrontJS = new Front();
})