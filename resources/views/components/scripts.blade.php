<script>
    
    class AlternarConteudoScripts{
        constructor(){
            this.header = document.querySelector("header")
            this.conteudos = document.getElementById("conteudos").classList
            this.admotos = document.getElementById("conteudo_admotos").classList
            this.alseh = document.getElementById("conteudo_alseh").classList
            this.detectar_mudanca()
        }
        alterar_conteudo(conteudo){
            if(conteudo == "alseh"){
                this.conteudos.add("ml-[-100vw]")
                this.admotos.add("h-0")
                this.alseh.remove("h-0")
            } else {
                this.conteudos.remove("ml-[-100vw]")
                this.admotos.remove("h-0")
                this.alseh.add("h-0")
            }
        }
        detectar_mudanca(){
            this.header.addEventListener("click", () => {
                this.alterar_conteudo(header.menu_atual)
            })
        }
    }

    class ContactScripts{
        exibir(id, mensagem){
            this.contact_message = document.getElementById("contact_icon_message_" + id)
            this.contact_message.innerText = mensagem
            this.contact_message.classList.remove('opacity-0')
        }
    }

    class FullPictureScripts{
        constructor(){
            this.div = document.getElementById("full_picture_div")
            this.img = document.getElementById("full_picture_img")
        }
        esconder(){
            this.div.classList.remove("fixed")
            this.div.classList.add("hidden")
        }
        mostrar(imagem){
            this.img.src = "assets/img/" + imagem + ".jpg"
            this.div.classList.add("fixed")
            this.div.classList.remove("hidden")
        }
    }

    class HeaderScripts{
        constructor(){
            this.menu_atual = "inicio"
            this.horario = document.getElementById("horario_1")
            this.header = document.querySelector("header")
            this.nav = document.querySelector("nav")
            this.fixa_ao_rolar()
        }
        exibe_oculta_horario(){
            this.horario.classList.toggle("flex")
            this.horario.classList.toggle("hidden")
        }
        destaca_menu(menu){
            document.getElementById(this.menu_atual).classList.remove("bg-matte-blue")
            document.getElementById(menu).classList.add("bg-matte-blue")
            this.menu_atual = menu

        }
        fixa_ao_rolar(){
            window.onscroll = () => {
                if(window.pageYOffset > 100){
                    this.nav.classList.add("fixed", "h-14")
                    this.nav.classList.remove("h-10")
                } else {
                    this.nav.classList.remove("fixed", "h-14")
                    this.nav.classList.add("h-10")
                }
            }
        }
    }

    class WhatsappIconScripts{
        constructor(){
            this.whatsapp_icon = document.getElementById("whatsapp_icon")
            setTimeout(this.trocar_icone, 7000)
        }
        trocar_icone(){
            this.whatsapp_icon.src = "assets/img/icon_whatsapp_notification.svg"
        }
    }

    const alternar_conteudo = new AlternarConteudoScripts()
    const contact = new ContactScripts()
    const full_picture = new FullPictureScripts()
    const header = new HeaderScripts()
    const whatsapp_icon = new WhatsappIconScripts()

</script>