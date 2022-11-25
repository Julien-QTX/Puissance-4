/**
 * 
 * Il faut une fonction pour récupérer le JSON des messages et les afficher correctement 
 * 
 */

 function getMessages(){

    /**
     * créer une requête AJAX pour se co au serv / fichier handler.php 
     */
    
    const requeteAjax = new XMLHttpRequest();
    requeteAjax.open("GET", "handler.php");
    
    /**
     * Elle doit traiter les données pour qu'elle les affiche en format HTML 
     */
    
    requeteAjax.onload = function(){
        const resultat = JSON.parse(requeteAjax.responseText); 
    
        const html = resultat.reverse().map(function(message){
            return ` 
            <div class="message">
                <span class="date">${message.created_at.substring(11, 16)}</span>
                <span class="author">${message.author}</span>
                <span class="content">${message.content}</span>
            </div>
            `
        }).join('');
    
        const messages = document.querySelector('.messages');
    
        messages.innerHTML = html; 
        messages.scrollTop = messages.scrollHeight;
        console.log(html);
    }
    
    /**
     * On envoie la requete 
     */
    
    requeteAjax.send();
    }
    
    /**
     * Fonction qui envoie le message au serv et qui actualise la page 
     */
    
    function postMessage(event){
    
    
        /**
         * Elle doit stoper le submit du formulaire 
         */
        event.preventDefault();
        // elle doit récupérer les données du formulaire 
        const author = document.querySelector('#author'); 
        const content = document.querySelector('#content'); 
        // Elle doit conditionner les données  
        const data = new FormData();
        data.append('authur')
        // elle doit configurer une requete AJAX en POST et envoyer les données 
        const requeteAjax = new XMLHttpRequest(); 
        requeteAjax.open('POST', 'handler.php?task=write');
    
        requeteAjax.onload = function(){
            content.value = ''; 
            content.focus();
            getMessages();
        }
    
        requeteAjax.send(data);
     }
    
     document.querySelector('form').addEventListener('submit' , postMessage); 
    
     const interval = window.setInterval(getMessages, 3000);