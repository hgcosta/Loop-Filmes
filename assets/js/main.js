
//Menu Mobile
function openNav() {
    document.getElementById("myNav").style.width = "100%";
  }
  
  function closeNav() {
    document.getElementById("myNav").style.width = "0%";
  }

  //Scroll fixo
  document.addEventListener('scroll',()=>{
    const cabecalho = document.querySelector('.header-site');
    if($(document).scrollTop() > 100){
      cabecalho.classList.add('fixed');
    }else{
      cabecalho.classList.remove('fixed');
    }
  });

 
// ==================> SCRIPT TAB EQUIPE <=================================
// Selecionando o Item do menu equipe
const tabMenu = document.querySelectorAll('.js-tabmenu li');
// Selecionando o conteúdo da equipe
const tabContent = document.querySelectorAll('.js-tabcontent section');
// Adicionando o 1 item ativo

if(tabMenu.length && tabContent.length){


  tabContent[0].classList.add('ativo-content-equipe');
  tabMenu[0].classList.add('ativo-lista-equipe');

  // Função que ativa e desativa o conteúdo do item
  function activeTab (index){
    // Foreach pecorre por todos os itens do conteudo para que ele remova o ativo 
    tabContent.forEach((section) => {
      section.classList.remove('ativo-content-equipe');
    });
    // Adiciona a class ativo no item menu
    tabContent[index].classList.add('ativo-content-equipe');
  }
  function activeTabList (index){
    // Foreach pecorre por todos os itens do conteudo para que ele remova o ativo 
    tabMenu.forEach((section) => {
      section.classList.remove('ativo-lista-equipe');
    });
    // Adiciona a class ativo no item menu
    tabMenu[index].classList.add('ativo-lista-equipe');
  }
     
  // Função que ativa a class ativo de acordo com o item clicado
  tabMenu.forEach((itemMenu,index)=>{
    // Adicionando o evento a função
    itemMenu.addEventListener('click', ()=>{
  
      // Chamada da função a partir do index
      activeTab(index);
    });
  });
  // Função que ativa a class ativo ao menu com o item clicado

  tabMenu.forEach((itemMenu,index)=>{
    // Adicionando o evento a função
    itemMenu.addEventListener('click', ()=>{
  
      // Chamada da função a partir do index
      activeTabList(index);
    });
  });
}


// ===================> SCRIPT TAB SERVIÇOS  <=========================
// Selecionando o Item do menu servicos
const tabMenuServicos = document.querySelectorAll('.js-tabMenuServicos li');
// Selecionando o conteúdo da servicos
const tabContentServicos = document.querySelectorAll('.js-tabContentServicos section');
// Adicionando o 1 item ativo

if(tabMenuServicos.length && tabContentServicos.length){


  tabContentServicos[0].classList.add('ativo-content-servicos');
  tabMenuServicos[0].classList.add('ativo-lista-servicos');

  // Função que ativa e desativa o conteúdo do item
  function activeTabServicos (index){
    // Foreach pecorre por todos os itens do conteudo para que ele remova o ativo 
    tabContentServicos.forEach((section) => {
      section.classList.remove('ativo-content-servicos');
    });
    // Adiciona a class ativo no item menu
    tabContentServicos[index].classList.add('ativo-content-servicos');
  }
  function activeTabServicosList (index){
    // Foreach pecorre por todos os itens do conteudo para que ele remova o ativo 
    tabMenuServicos.forEach((section) => {
      section.classList.remove('ativo-lista-servicos');
    });
    // Adiciona a class ativo no item menu
    tabMenuServicos[index].classList.add('ativo-lista-servicos');
  }
     
  // Função que ativa a class ativo de acordo com o item clicado
  tabMenuServicos.forEach((itemMenu,index)=>{
    // Adicionando o evento a função
    itemMenu.addEventListener('click', ()=>{
  
      // Chamada da função a partir do index
      activeTabServicos(index);
    });
  });
  // Função que ativa a class ativo ao menu com o item clicado

  tabMenuServicos.forEach((itemMenu,index)=>{
    // Adicionando o evento a função
    itemMenu.addEventListener('click', ()=>{
  
      // Chamada da função a partir do index
      activeTabServicosList(index);
    });
  });
}
