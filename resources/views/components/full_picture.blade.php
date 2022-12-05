<div id="full_picture_div" onclick="full_picture.esconder()" class="hidden cursor-zoom-out w-screen h-screen bg-[rgba(0,0,0,.9)] z-10">
    <div class="w-full h-full flex justify-center items-center">
        <div>
            <img id="full_picture_img" class="w-full h-full max-w-[90vw] max-h-[90vh] msm:max-w-[80vw] sm:max-h-[80vh]" src="" />
        </div>
    </div>
</div>
<script>
    class ScriptsFullPicture{
        constructor(){
            this.div = document.getElementById("full_picture_div")
            this.img = document.getElementById("full_picture_img")
        }
        esconder(){
            this.div.classList.remove("fixed")
            this.div.classList.add("hidden")
        }
        mostrar(imagem){
            console.log(this.image)
            this.img.src = "assets/img/" + imagem + ".jpg"
            this.div.classList.add("fixed")
            this.div.classList.remove("hidden")
        }
    }
    const full_picture = new ScriptsFullPicture()
</script>