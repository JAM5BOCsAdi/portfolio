const sections = document.querySelectorAll('.section');
const sectBtns = document.querySelectorAll('.controls');
const sectBtn = document.querySelectorAll('.control');
const allSections = document.querySelector('.main-content');

const getParams = () => {
    if(location?.search) {
        const params = location?.search.slice(1).split('&');
        let keyValues = {};
        params.forEach((p) => {
            const key = p.split('=')[0];
            const value = p.split('=')[1];

            keyValues[key] = value;
        });

        return keyValues;
    }else return null;
}
function PageTransitions(){
    let params = getParams();
    if(params && params?.section) {
        setActiveSection(params.section);
        window.history.replaceState({}, '', location.origin+location.pathname);
    }
    allSections.addEventListener('click', (e) => {
        const id = e.target.dataset.id;
        
        if(id){
            setActiveSection(id);   
        }
    });

    // Toggle theme
    const themeBtn = document.querySelector('.theme-btn');
    themeBtn.addEventListener('click', () => {
        let element = document.body;
        element.classList.toggle('light-mode')
    } )
}
const setActiveSection = (sectionId) => {
    const section = document.getElementById(sectionId);
    if(section.tagName === 'SECTION' || (section.tagName === 'HEADER' && sectionId === 'home')) {

        sectBtn.forEach((btn) => {
            btn.classList.remove('active-btn');
            if(btn.getAttribute('data-id') === sectionId){
                btn.classList.add('active-btn');
            }
        });
        sections.forEach(sec => {
            sec.classList.remove('active');
        });
        section.classList.add('active');
    }
}
PageTransitions();

function myFunctionReset() {
    document.getElementById("contact-form").reset();
  }
function myFunctionSubmit() {
    document.getElementById("contact-form").submit();
  }

/** --------------- CV Download ---------------- **/
/*
function onStartedDownload(id) {
    console.log(`Started downloading: ${id}`);
  }
  
  function onFailed(error) {
    console.log(`Download failed: ${error}`);
  }
  
  var downloadUrl = "https://oradam.web.elte.hu/Horvath_Adam_Oneletrajzok(CVs).zip";
  
  var downloading = browser.downloads.download({
    url : downloadUrl,
    filename : 'Horvath_Adam_Oneletrajzok(CVs).zip',
    conflictAction : 'uniquify'
  });
  
  downloading.then(onStartedDownload, onFailed);
 */

