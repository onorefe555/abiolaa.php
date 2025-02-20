const name_el=document.querySelector("#name_el");
const patientIdentifier_el=document.querySelector("#patientIdentifier_el");
const address_el=document.querySelector("#address_el");
const li_name_el=document.getElementById("li_name_el")
const li_pho_el=document.getElementById("li_pho_el")
const li_ad_el=document.getElementById("li_ad_el");
const dateOfBirth_li =document.getElementById("dateOfBirth_li")
const btn_all=document.getElementById("btn_all")
const delete_all_btn=document.getElementById("delete_all_btn")
const dateOfBirth_el = document.querySelector("#dateOfBirth_el")
const bloodType_el = document.getElementById("bloodType_el")
const gender_el = document.querySelector("#gender_el")

const patientID = document.getElementById("li_ID_NO").value
let patient_id_no_array = [0,1,2,3,4,5,6,7,8,9,"A","B","C","D","E","F","G"]
let patient_Index_no = 0



let patientIdentifierStore=[]
let nameStore=[]
let preferNameStore=[]
let dateOfBirthStore=[]
let bloodTypeStore=[]
let genderStore=[]


const localGenderStore = JSON.parse(localStorage.getItem("genderStore"))
if (localGenderStore) {
    genderStore = localGenderStore
    renderName()
}
const localBloodTypeStorage = JSON.parse(localStorage.getItem("bloodTypeStore"))
if (localBloodTypeStorage) {
    bloodTypeStore =localBloodTypeStorage
    renderName()
}

const localNameStorage = JSON.parse(localStorage.getItem("nameStore"))
if(localNameStorage){
    nameStore=localNameStorage
    renderName()
}
const localPreferNameStorage=JSON.parse(localStorage.getItem("preferNameStore"))
if(localPreferNameStorage){
    preferNameStore= localPreferNameStorage
    renderName()
}
const localPhoneStorage=JSON.parse(localStorage.getItem("patientIdentifierStore"))
if(localPhoneStorage){
    patientIdentifierStore=localPhoneStorage
    renderName()
}
const locDateOfBirthStorage=JSON.parse(localStorage.getItem("dateOfBirthStore"))
if (locDateOfBirthStorage) {
    dateOfBirthStore=locDateOfBirthStorage
    renderName()
}
const btn_addInformation=document.getElementById("btn_addInformation")
const btn_delete =document.getElementById("btn_delete")
 const btn_save=document.getElementById("btn_save")
 
 const unorderlist_information = document.querySelector("#unorderlist_information") 
 
btn_addInformation.addEventListener("click", function () {
    let arrayGenerator =patient_id_no_array[Math.floor(Math.random(patient_Index_no)*1)]
    triggerAddInformation()
    alert("moses")
})

function triggerAddInformation() {
    nameStore.push(name_el.value)
    renderName()
    
    preferNameStore.push(address_el.value)
    // renderPreferName()
    
    patientIdentifierStore.push(patientIdentifier_el.value)
    // rendPatientIdentifier()
    

    dateOfBirthStore.push(dateOfBirth_el.value)
    // renderdateOfBirth()
    
    bloodTypeStore.push(bloodType_el.value)
    

    genderStore.push(gender_el.value)
    
}
const error_message = document.querySelector("#error_message")
function renderName() {
    let nameList=""
    for(let i=0; i<nameStore.length, 
        i<preferNameStore.length, 
        i<patientIdentifierStore.length,
        i<bloodTypeStore.length,
        i<genderStore.length,
        i<dateOfBirthStore.length; i++){
        nameList+= "<li>"+"<span class='list_info'>Full Name :</span> "+" "+nameStore[i]+
        "<br> <span class='list_info'>Prefer Name : </span>" +preferNameStore[i]+
        "<br><span class='list_info'>Patient Identifier : </span>"+patientIdentifierStore[i]+
        "<br><span class='list_info'> D.O.B : </span>"+dateOfBirthStore[i]+
        "<br><span class='list_info'>Blood type : </span>"+bloodTypeStore[i]+
        "<br><span class='list_info'>Gender : </span>"+genderStore[i]+  "</li>"
    }
    
        li_name_el.innerHTML= nameList    
}

btn_delete.addEventListener("dblclick", function () {
    patientIdentifierStore.pop()
    nameStore.pop()
    preferNameStore.pop()
    dateOfBirthStore.pop()
    bloodTypeStore.pop()
    genderStore.pop()
    renderName()   
})

delete_all_btn.addEventListener("dblclick",function () {
    localStorage.clear()
    patientIdentifierStore=[]
    nameStore=[]
    preferNameStore=[]
    rendPatientIdentifier()
    renderPreferName()
    renderName()
        console.log("double clicked")
    })

    btn_save.addEventListener("dblclick", function () {
        localStorage.setItem("nameStore",JSON.stringify(nameStore))
        localStorage.setItem("preferNameStore",JSON.stringify(preferNameStore))
        localStorage.setItem("patientIdentifierStore",JSON.stringify(patientIdentifierStore))
        localStorage.setItem("dateOfBirthStore",JSON.stringify(dateOfBirthStore))
        localStorage.setItem("bloodTypeStore", JSON.stringify(bloodTypeStore))
        localStorage.setItem("genderStore", JSON.stringify(genderStore))
        alert("hellow")
    })

   

