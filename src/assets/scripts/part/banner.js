export default function banner(){
    const close = document.getElementById('bannerClose');
    const banner = document.getElementById('siteBanner');

    let firstTime = sessionStorage.getItem("firstTime");
   
    if(! firstTime){
        sessionStorage.setItem("firstTime", true);
        setTimeout(()=>{ banner.classList.add('open')},1500)
    }
  
    close.addEventListener('click', ()=>{
        banner.classList.remove('open')
    })

}