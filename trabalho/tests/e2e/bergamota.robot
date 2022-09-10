*** Settings *** 
Library     SeleniumLibrary

*** Variables ***
${url}                            http://localhost:8080/

*** Test Cases ***
Titulo
    Open Browser                  ${url}                        chrome
    Title Should Be               Cardapio
    Close Browser 

Cadastrar
    Open Browser                   ${url}                        chrome 
    Click Element                  xpath=/html/body/div/a
    Title Should Be                Cadastrar
    Input Text                     name=nome                     laranja
    Input Text                     name=descricao                fruta
    Input Text                     name=preco                     10
    Click Element                  name=submit
    ${menssagem}                   Get WebElement                xpath=/html/body/div/div        
    Should Contain                 ${menssagem.text}             Cadastrado com sucesso!
    Close Browser  

Editar Item
    Open Browser                  ${url}                        chrome
    Click Element                 xpath=/html/body/div/table/tbody/tr[2]/td[4]/a[1]  
    Title Should Be               Cadastrar
    Input Text                    name=nome                     banana
    Input Text                    name=descricao                fruta
    Input Text                    name=preco                    20
    Click Element                 name=submit
    ${menssagem}                  Get WebElement                xpath=/html/body/div/div        
    Should Contain                ${menssagem.text}             Cadastrado com sucesso!
    Close Browser 

Excluir Item    
    Open Browser                  ${url}                        chrome
    Click Element                 xpath=/html/body/div/table/tbody/tr[2]/td[4]/a[2] 
    ${menssagem}                  Get WebElement                xpath=/html/body/div/div        
    Should Contain                ${menssagem.text}             item Excluído com Sucesso
    Close Browser 



    