let mic = document.getElementById("mic");
let chatareamain = document.querySelector('.chatarea-main');
let chatareaouter = document.querySelector('.chatarea-outer');

let intro = ["Hello, Welcome to Hello Mummy, How are you?", "Hi, Welcome to Hello Mummy, How are you?"];
let help = ["How can I help you?  Choose one from below. <br> Say ADVICES for Common Advices. <br> Say DISCOMFORT for Common Discomfort Issues. <br> Say OTHER For Further Assistance."];
let discomfort = ["Tell me your problem. Please select one from the list. <br> Fatigue, <br> Morning sickness, <br> Backache, <br> Leg cramps,<br> constipation, <br> heart burn, <br> swelling,<br> Shortness of breath, <br> Difficulty Sleeping ,<br> Mood swings,<br> Skin colour changes or any other"];
let advices=["Following are some common advices for healthy pregnancy. <br> 1. Eat healthy foods. Eating healthy foods is especially important for pregnant women.  Your baby needs nutrients to grow healthy and strong in the womb. Eat plenty of colorful fruits and vegetables, whole grains, calcium-rich foods and foods low in saturated fat. <br><br> 2. Take a daily prenatal vitamin. Taking a daily prenatal multivitamin can help ensure you get the right amount of the key nutrients you and your baby need during pregnancy. These include folic acid, iron and calcium. <br><br> 3. Stay hydrated. A pregnant woman’s body needs more water than it did before pregnancy. Aim for eight or more cups each day. <br><br> 4. Go to your prenatal care checkups. Women should get regular prenatal care from a health care provider. Moms who don’t get regular prenatal care are much more likely to have a baby with low birth weight or other complications. If available, consider group prenatal care. <br><br>  5. Avoid certain foods. There are certain foods that women should avoid eating while pregnant. Don’t eat:Raw or rare meats Liver, sushi, raw eggs (also in mayonnaise) Soft cheeses (feta, brie) Unpasteurized milk. <br><br> 6. Don’t drink alcohol. Don’t drink alcohol before and during pregnancy and while breastfeeding. Drinking alcohol increases the risk of having a baby with fetal alcohol spectrum disorder (FASD). FASD can cause abnormal facial features, severe learning disabilities and behavioral issues. Alcohol can impact a baby’s health in the earliest stages of pregnancy, before a woman may know she is pregnant. Therefore, women who may become pregnant also should not drink alcohol.<br><br> 7. Don’t smoke. Smoking is unhealthy for you and your unborn child. It increases the risk of sudden infant death syndrome (SIDS), premature birth, miscarriage and other poor outcomes. <br><br> 8. Get moving. Daily exercise or staying active in other ways can help you stay healthy during pregnancy. Check with your doctor to find out how much physical activity is right for you.  <br><br> 9. Get plenty of sleep. Ample sleep (7 to 9 hours) is important for you and your baby. Try to sleep on your left side to improve blood flow.  10. Reduce stress. Reducing stress is crucial for improving birth outcomes. Pregnant women should avoid, as much as they can, stressful situations. Recruit your loved ones to help you manage stress in your life. if you need more advices please visit our advices page."];
let greetings = ["I am good ", "I am fine, what about you"];
let morningsickness = ["Morning sickness is a nausea or vomiting sensation that occurs during pregnancy, most typically in the first trimester. Morning sickness can occur at any time of day or night. While most pregnant women suffer morning sickness at some point, it usually passes by the second trimester for the majority of them. Nausea can be caused by a potassium and magnesium deficiency in the diet, as well as low blood sugar and vitamin B6 deficiency. Consider the following suggestions to help with morning sickness. Consuming smaller meals more frequently (include morning and afternoon snacks between main meals). Shortly after waking up. Eating a plain cracker. Trying to drink 8 glasses of water a day avoiding spicy or fatty foods. Consuming high-protein foods (such as nuts or cheese). Preventing yourself from skipping meals. Hope you understood! Say YES if you need any further assistance"];
let fatigue =[" If you are feeling tired and need a nap. As your baby develops and you prepare for parenthood, your body is working hard, and you're going through physical and emotional changes. While some women have increased energy during pregnancy, exhaustion is significantly more prevalent. Make an effort to get some rest. Allow yourself to sit with your feet up or take a nap if you can, and try to go to bed early. Make a request for assistance. You are not need to complete all of the tasks. It's perfectly acceptable to seek support. You can ask your partner to prepare dinner while you relax, or you can take the help of a family member to look after the kids. Make sure you drink plenty of water. To keep your blood sugar levels steady, eat on a regular basis. Hope you understood! Say YES if you need any further assistance"];
let backache =["The ligaments in your body soften and stretch naturally during pregnancy to prepare you for labor. This can induce backache by putting tension on the joints of your lower back and pelvis. The added weight of your uterus, as well as the expanding hollow in your lower back, might lead to more problems. There are a number of things you can do to help prevent backache and manage with a hurting back if it does happen.Lifting heavy objects should be avoided at all costs. Always bend your knees and maintain your back straight when lifting or picking something up from the floor. These pointers can also help you safeguard your back; try to remember them on a daily basis.When turning around, move your feet to avoid twisting your spine.Wear flat shoes so that your weight is spread evenly.Work at a height that prevents you from stooping.When carrying groceries, attempt to divide the weight between two bags.Sit up straight with your back well supported.Long periods of standing or sitting should be avoided.Make sure you get enough rest, especially as the pregnancy periods.Make an effort to maintain proper posture. Hope you understood! Say YES if you need any further assistance"];
let headache=["Many pregnant women suffer from headaches, especially in the first and third trimesters. You may notice an increase in the amount of headaches you suffer around week 9 of your pregnancy if you're pregnant. Headaches in the early stages of pregnancy can be caused by an increase in the volume of blood your body produces, in addition to hormonal changes. Other factors that can induce headaches during pregnancy include, sleeping insufficiently. Caffeine withdrawal symptoms (e.g. in coffee, tea or cola drinks). Feeling worried due to low blood sugar and dehydration. It's also a good idea to try to treat your headache without using any medication. You could try obtaining more rest and relaxation or getting more sleep. Yoga sessions or other forms of exercise are recommended for pregnant women. maintaining excellent posture, especially later in pregnancyeating well-balanced meals on a daily basisIf you have a sinus headache, place a warm facecloth over your eyes and nose. Using a heat pack, taking a bath, or applying a cold pack to the back of your neck are all options. Massage of the neck and shoulders. Hope you understood! Say YES if you need any further assistance"];
let legcramps=["Cramps are a sharp, sudden discomfort that usually affects the calf muscles or the foot. A cramp occurs when your muscles tighten very tightly when they should not. They typically occur at night and are increasingly common as your pregnancy progresses. They can be extremely distressing, and knowing what to do might be difficult.Certain activities may help in the prevention of cramps.Gentle workouts like walking or swimming, as well as specific exercises like calf lifts and walking on the spot, can assist improve blood flow in the legs and prevent cramping. Hope you understood! Say YES if you need any further assistance"];
let constipation=["Later in pregnancy, constipation is common. It occurs when you don't have bowel movements or have them seldom, or when your stools (poop) are difficult to pass. Constipation can be caused by pregnant hormones as well as the weight of your enlarging uterus, which can impact your digestion. The process by which your body breaks down food after you eat is known as digestion.Here are some things you can do to relieve constipation.Make sure you get plenty of water. Fruit juice, particularly prune juice, can also be beneficial.Fruit, vegetables, legumes, whole-grain bread and pasta, and bran cereal are all high in fiber.Smaller meals should be consumed multiple times throughout the day. It's possible that smaller portions of food are easier to digest.Every day, do something active. Walking is beneficial. Hope you understood! Say YES if you need any further assistance"];
let heartburn=["A unpleasant, burning sensation in the mouth or chest is known as heartburn. When food or stomach acid backs up into your esophagus, this happens. The esophagus is the tube that connects your mouth to your stomach and transports food, fluids, and saliva. Pregnancy hormones relax the valve between the stomach and the esophagus, and your developing uterus (womb) puts pressure on your stomach, causing heartburn. Here are some things you can take to relieve heartburn. Instead of three substantial meals a day, eat five or six modest ones. Don't rush through your meals. Between meals, drink more fluids and less during meals.Don't eat late in the evening. 2 to 3 hours before you lie down or go to bed, eat your final meal.Avoid oily or fatty foods, spicy foods, citrus items (such as oranges or orange juice), and chocolate, which can cause heartburn.Don't consume alcoholic beverages. Drinking alcohol while pregnant might have major consequences for your child.When sleeping, raise your head up on pillows. Hope you understood! Say YES if you need any further assistance"];
let shortnessofbreath=["Shortness of breath occurs when you don't feel like you're getting enough air into your lungs. When your baby is huge and pressing on your diaphragm later in pregnancy, you may feel like this (the muscle that helps you breathe). Even if you're having trouble breathing, your kid is getting oxygen in the womb. To make breathing easier, try the following: Please don't smoke. Tell your doctor if you need assistance quitting smoking. Allow your lungs to expand by sitting or standing up straight. Take it slowly.Make an effort to inhale fresh air. Avoid secondhand smoke (smoke from someone else's tobacco) and other pollutants in the air. Hope you understood! Say YES if you need any further assistance"];
let swelling=["During pregnancy, most women experience swollen ankles and feet. It's reasonable to be concerned about swelling because it might be unpleasant, so tighten your shoes.There are three basic reasons of swelling in pregnant women.You create more blood than usual during pregnancy to help your baby grow.Your uterus expands as the baby grows, partially blocking the veins that carry blood from your legs to your heart.Your hormones soften the walls of your veins, making it more difficult for them to function effectively.Some easy things can make you feel more at ease while also helping to reduce swelling.Avoid standing still for long periods of time.Put on some comfortable sneakers (avoid tight straps or anything that might pinch if your feet swell).Limit salty meals and excessive salt in your diet by putting your feet up as much as possible.Exercise regularly by walking or swimming – this helps maintain your circulation moving. Sleep on your left side to assist blood return to the heart. Hope you understood! Say YES if you need any further assistance"];
let difficultysleeping=["During the last few months of pregnancy, some women have difficulty sleeping comfortably. Furthermore, it may be difficult to relax when you are worrying about the baby, labor, and motherhood.What to do about it.   Before going to bed, take a warm shower or bath to help you relax. Caffeine should be avoided.Exercising late in the day should be avoided. Make use of pillows to help you relax. Sleep on your side with a cushion behind your stomach and another beneath your legs. Before going to bed, do some relaxing exercises, such as yoga. Confirm that your bedroom is both calm and pleasant. Hope you understood! Say YES if you need any further assistance"];
let yes = ["  For further assistance please send an email to hellomummyrep2022@gmail.com. We will help you as soon as possible. Have a wonderful day! "];
let other=[" Hello, if its any other problem, its better to send an email to hellomummyrep2022@gmail.com . we will respond you as soon as possible. Discover our website for more. Nice to talk to you! "];
let thank = ["Most welcome","Not an issue","Its my pleasure"];
let closing = ['Ok bye-bye','As you wish, bye take-care','Bye-bye, see you soon..'];
let questionablereply=['I am sorry, I didn’t hear you clearly. Could you say that again?','Could you repeat that, please'];

const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
const recognition = new SpeechRecognition();

function showusermsg(usermsg){
    let output = '';
    output += `<div class="chatarea-inner user">${usermsg}</div>`;
    chatareaouter.innerHTML += output;
    return chatareaouter;
}

function showchatbotmsg(chatbotmsg){
    let output = '';
    output += `<div class="chatarea-inner chatbot">${chatbotmsg}</div>`;
    chatareaouter.innerHTML += output;
    return chatareaouter;
}

//messages 
function chatbotvoice(message){
    const speech = new SpeechSynthesisUtterance();
    let finalresult= questionablereply[Math.floor(Math.random() * intro.length)];
    speech.text = finalresult;


    if(message.includes('hello')){
        let finalresult = intro[Math.floor(Math.random() * intro.length)];
        speech.text = finalresult;
    }
    if(message.includes('Hi')){
        let finalresult = intro[Math.floor(Math.random() * intro.length)];
        speech.text = finalresult;
    }
    if(message.includes('fine')){
        let finalresult = help[Math.floor(Math.random() * help.length)];
        speech.text = finalresult;
    }
    if(message.includes('good')){
        let finalresult = help[Math.floor(Math.random() * help.length)];
        speech.text = finalresult;
    }

    if(message.includes('how are you' || 'how are you doing today')){
        let finalresult = greetings[Math.floor(Math.random() * greetings.length)];
        speech.text = finalresult;
    }
    if(message.includes('how' )){
        let finalresult = greetings[Math.floor(Math.random() * greetings.length)];
        speech.text = finalresult;
    }
    if(message.includes('discomfort')){
        let finalresult =discomfort[Math.floor(Math.random() *discomfort.length)];
        speech.text = finalresult;
    }
    if(message.includes('advices')){
        let finalresult =advices[Math.floor(Math.random() *advices.length)];
        speech.text = finalresult;
    }
    
    if(message.includes('morning sickness')){
        let finalresult = morningsickness[Math.floor(Math.random() * morningsickness.length)];
        speech.text = finalresult;
    }
    if(message.includes('fatigue')){
        let finalresult = fatigue[Math.floor(Math.random() * fatigue.length)];
        speech.text = finalresult;
    }
    if(message.includes('backache')){
        let finalresult = backache[Math.floor(Math.random() * backache.length)];
        speech.text = finalresult;
    }
    if(message.includes('headache')){
        let finalresult = headache[Math.floor(Math.random() * headache.length)];
        speech.text = finalresult;
    }
    if(message.includes('leg' || 'leg cramps')){
        let finalresult = legcramps[Math.floor(Math.random() * legcramps.length)];
        speech.text = finalresult;
    }
    if(message.includes('constipation')){
        let finalresult = constipation[Math.floor(Math.random() * constipation.length)];
        speech.text = finalresult;
    }
    if(message.includes('heart' || 'heartburn')){
        let finalresult = heartburn[Math.floor(Math.random() * heartburn.length)];
        speech.text = finalresult;
    }
    if(message.includes(' breath' || 'shortness of breath')){
        let finalresult = shortnessofbreath[Math.floor(Math.random() * shortnessofbreath.length)];
        speech.text = finalresult;
    }
    if(message.includes('swelling')){
        let finalresult = swelling[Math.floor(Math.random() * swelling.length)];
        speech.text = finalresult;
    }
    if(message.includes('sleeping' || ' difficulty sleeping')){
        let finalresult = difficultysleeping[Math.floor(Math.random() * difficultysleeping.length)];
        speech.text = finalresult;
    }
    if(message.includes('other' || ' other problem')){
        let finalresult = other[Math.floor(Math.random() * other.length)];
        speech.text = finalresult;
    }
    if(message.includes('yes')){
        let finalresult = yes[Math.floor(Math.random() * yes.length)];
        speech.text = finalresult;
    }
    if(message.includes('no')){
        let finalresult = yes[Math.floor(Math.random() * yes.length)];
        speech.text = finalresult;
    }
    if(message.includes('thank you' || 'thank you so much')){
        let finalresult = thank[Math.floor(Math.random() * thank.length)];
        speech.text = finalresult;
    }
    if(message.includes('bye' || 'nice to talk to you')){
        let finalresult = closing[Math.floor(Math.random() * closing.length)];
        speech.text = finalresult;
    }
    window.speechSynthesis.speak(speech);
    chatareamain.appendChild(showchatbotmsg(speech.text));
}

recognition.onresult=function(e){
    let resultIndex = e.resultIndex;
    let transcript = e.results[resultIndex][0].transcript;
    chatareamain.appendChild(showusermsg(transcript));
    chatbotvoice(transcript);
    console.log(transcript);
}
recognition.onend=function(){
    mic.style.background="#ff3b3b";
}
mic.addEventListener("click", function(){
    mic.style.background='#39c81f';
    recognition.start();
    console.log("Activated");
})
