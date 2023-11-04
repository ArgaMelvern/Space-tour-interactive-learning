// Destination Sub-Navigation
const tabList = document.querySelector('[role="tablist"]');
const tabs = tabList.querySelectorAll('[role="tab"]');

tabList.addEventListener('keydown', changeTabFocus);

tabs.forEach((tab) =>{
    tab.addEventListener('click',changeTabPanel);
})

let tabFocus = 0;
function changeTabFocus(e){
    const keydownLeft = 37;
    const keydownRight = 39;

    // change the tabindex of the current tab to -1
    if(e.keyCode === keydownLeft || e.keyCode === keydownRight){
        tabs[tabFocus].setAttribute("tabindex", -1);
        // if the right key is pushed, move to the next tab on the right, if the left key is pushed, move to the next tab on the left
        if(e.keyCode === keydownRight){
            tabFocus++;
            if(tabFocus >= tabs.length){
                tabFocus = 0;
            }
        }else if(e.keyCode === keydownLeft){
            tabFocus--;
            if(tabFocus < 0){
                tabFocus = tabs.length-1  ;  
            }
        };
        tabs[tabFocus].setAttribute("tabindex", 0);
        tabs[tabFocus].focus();
        };


};

function changeTabPanel(e){
    const targetTab = e.target;
    const targetPanel = targetTab.getAttribute('aria-controls');
    const targetImage = targetTab.getAttribute('data-image');

    const targetContainer = targetTab.parentNode;
    const mainContainer = targetContainer.parentNode;

    targetContainer.querySelector('[aria-selected="true"]').setAttribute("aria-selected", false);
    targetTab.setAttribute("aria-selected", true)

    hidContent(mainContainer, '[role="tabPanel"]');
    showContent(mainContainer, [`#${targetPanel}`]);

    hidContent(mainContainer, 'picture');
    showContent(mainContainer, [`#${targetImage}`]);

    // MANUAL(Which is not effective)
    // mainContainer.querySelectorAll('[role="tabPanel"]').forEach((panel) => panel.setAttribute("hidden", true));
    // mainContainer.querySelector([`#${targetPanel}`]).removeAttribute('hidden');

    // mainContainer.querySelectorAll('picture').forEach((picture) => picture.setAttribute("hidden", true));
    // mainContainer.querySelector([`#${targetImage}`]).removeAttribute('hidden');
    
}
function hidContent(parent, content){
    parent.querySelectorAll(content).forEach((item) => item.setAttribute("hidden", true));
}

function showContent(parent, content){
    parent.querySelector(content).removeAttribute('hidden');
}