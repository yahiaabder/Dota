
<?php



if(!function_exists("lg_get_text")){

function lg_get_text($txt_code){
    $lg_code = get_cookie("language");
    $lg_texts = array(
        "EN" => array(
            "lg_01" => "Home",
            "lg_02" => "DOTA Registration",
            "lg_03" => "Rules & Regulations",
            "lg_04" => "Gallery",
            "lg_05" => "Contact us",
            "lg_06" => "WHO WE ARE?",
            "lg_07" => "Read more",
            "lg_08" => "What Sets Us Apart?",
            "lg_09" => "Our Leagues",
            "lg_10" => "NATIONAL DOMESTIC LEAGUE",
            "lg_11" => "INTER UNIVERSITY LEAGUE",
            "lg_12" => "INTER SCHOOL LEAGUE",
            "lg_13" => "DOTA",
            "lg_14" => "Brand Ambassador",
            "lg_15" => "Best moments",
            "lg_16" => "Name",
            "lg_17" => "Email",
            "lg_18" => "Phone number",
            "lg_19" => "Subject",
            "lg_20" => "Send",
            "lg_21" => "Proposed Dates:",
            "lg_22" => "Tie Format:",
            "lg_23" => "Scoring:",
            "lg_24" => "Participants:",
            "lg_25" => "Courts:",
            "lg_26" => "Age Groups",
            "lg_27" => "Number of Players for Kids League:",
            "lg_28" => "Use of the Entry Fees:",
            "lg_29" => "Entry Deadline:",
            "lg_30" => "Fees",
            "lg_31" => "Close",
            "lg_32" => "Register now",
            "lg_33" => "<b>For Kids</b>: 2 Singles + 1 Doubles (Age Group - U12, U14 and U18) <br> <b>For Adults</b>: Open Singles - Draw of 64, Open Doubles - Draw of 32",
            "lg_34" => "Best of 3 sets, Final set 10 points Tie Break, No ad system, Finals (TBA)",
            "lg_35" => "<b>Kids League:</b> Affiliated to TE Sports Clubs, Private Academy, Sports Services Companies, Sports &amp; Social Centers may enter 1 or 2 teams per age group. <br> <b>Adults:</b> Mandatory registration with TE Pin.",
            "lg_36" => "<b>Kids League:</b> Participant's teams must be able to play their home ties on 2 courts to play 2 Singles followed by deciding Doubles on 1 court, or on 1 court to play Singles 2 followed by Singles 1 followed by Doubles (As in Davis Cup GIII &amp; GIV).",
            "lg_37" => "<p> The 2023/2024 DOTA league is open to the following kids age groups: </p>
                        <ul style=''>
                            <li>U12 Boys &amp; Girls (Full Courts, Yellow Balls, Over 8 years)</li>
                            <li>U14 Boys &amp; Girls (Full Courts, Yellow Balls)</li>
                            <li>U18 Boys &amp; Girls (Full Courts, Yellow Balls)</li>
                        </ul>
                        <p> Men's &amp; Women's Open (Full Courts, Yellow Balls, Over 16 years) </p>",
            "lg_38" => "<p> Teams must be composed by TE registered players representing an affiliated Tennis Institution for the   running season 2023/2024.</p>
                        <ul>
                            <li>
                                U12 Team: 4 to 6 Players (Minimum 4 / Maximum 6)
                            </li>
                            <li>
                                U18 Team: 4 to 6 Players (Minimum 4 / Maximum 6)
                            </li>
                            <li>
                                U14 Team: 4 to 6 Players (Minimum 4 / Maximum 6)
                            </li>
                        </ul>
                        <p> One player cannot represent two teams. </p>",
            "lg_39" => "<ul>
                            <li> League administration</li>
                            <li>T-shirts for players U12, U14 &amp; U18</li>
                            <li>Medal &amp; Certificates for players U12, U14 &amp; U18</li>
                            <li>Prizes for the winners (iPhones, Apple Watches, Trophies, and exciting gifts)</li>
                        </ul>",
            "lg_40" => "10th October 2023",
            "lg_41" => "Entry Fee per Boy's Team: 700 AED",
            "lg_42" => "Entry Fee per Girl's Team: 700 AED",
            "lg_43" => "Entry Fee for Men's Open (Singles): 250 AED",
            "lg_44" => "Entry Fee for Men's Open (Doubles): 500 AED",
            "lg_45" => "Entry Fee for Women's Open (Singles): 250 AED",
            "lg_46" => "Entry Fee for Women's Open (Doubles): 500 AED",
            "lg_47" => "What is DOTA",
            "lg_48" => "\"Dubai Open for Tennis Academies League\" - a groundbreaking tournament that brings together the finest young tennis talents from across the globe. This premier event is designed exclusively for tennis academies, offering a unique platform for emerging players to showcase their skills, tenacity, and sportsmanship.",
            "lg_49" => "With the iconic Dubai skyline as its backdrop, this championship goes beyond traditional competitions. It's a celebration of dedication, teamwork, and the pursuit of excellence. Our tournament aims to provide a springboard for the next generation of tennis stars, creating an environment where they can learn, compete, and make their mark on the international stage.",
            "lg_50" => "The \"Dubai Open for Tennis Academies League\" not only promises intense on-court action but also fosters camaraderie and cultural exchange among participants. It's an opportunity for academies to demonstrate their coaching prowess and for players to forge lasting friendships that transcend borders.",
            "lg_51" => "Join us in this dynamic event as we unite the spirit of tennis with the vibrancy of Dubai, setting the stage for a competition that will shape the future of the sport. Welcome to a tournament that's more than a game - it's a journey of growth, sportsmanship, and a shared passion for tennis.",
            "lg_52" => "Education Meets Athletics",
            "lg_53" => "Friendly Competition",
            "lg_54" => "Skill Development",
            "lg_55" => "Lifelong Memories",
            "lg_56" => "We firmly believe in the power of combining academics with sports. The Inter-Academies Tennis League provides a unique opportunity for students to excel not only in the classroom but also on the tennis court.",
            "lg_57" => "Academies from all over the region come together to compete, fostering camaraderie and healthy competition among students. It's a chance for young athletes to represent their schools with pride.",
            "lg_58" => "Our league isn't just about winning matches; it's about honing skills, setting personal goals, and striving for excellence. Our experienced coaches and mentors are here to guide each player's journey.",
            "lg_59" => "The Dota Tennis League is a place where unforgettable memories are made. It's about forming friendships, learning life lessons, and creating stories that will be cherished for years to come.",
            "lg_60" => "The Inter-School Tennis League is a thrilling platform that brings together schools, young athletes, and the exhilarating world of tennis. It's more than just a sports league; it's a celebration of talent, teamwork, and the competitive spirit.",
            "lg_61" => "The Inter-University Tennis League program is a competitive sporting initiative that will bring together universities and colleges to participate in organized tennis competitions. It is aim to promote tennis as a sport among students, foster intercollegiate camaraderie, and provide a platform for aspiring tennis players to showcase their skills. Typically, universities form teams of players who represent their institution in a series of matches or tournaments against other universities. These events often follow a structured format, with singles and doubles matches, and may include both men's and women's divisions. The Inter-University Tennis League program encourages sportsmanship, teamwork, and healthy competition among students, contributing to a vibrant collegiate sports culture.",
            "lg_62" => "<p>The National Emirati Citizens Tennis Program is a comprehensive initiative launched by Dubai Sports Council in association With the renowned tennis Player Sania Mirza to promote and develop tennis among Emirati citizens. This program aims to foster a love for tennis, identify and nurture young talent, and ultimately enhance the presence of Emirati players on the international tennis stage.</p>
                        <p>Key components of the program include:</p>
                        <ul>
                            <li>Grassroots Development: The program starts by introducing tennis at the grassroots level in schools and communities across the UAE. It provides access to coaching, facilities, and equipment to encourage participation among Emirati youth.</li>
                            <li>Talent Identification: The program includes talent identification and scouting to identify promising young players by organizing Talent Hunts  with the potential to excel in tennis. These individuals are then provided with specialized training and support.</li>
                            <li>Coaching and Training: Emirati tennis players will receive high-quality coaching and training classes once they selected from Sania Mirza herself This includes technical, tactical, and physical development to help them compete at the highest levels.</li>
                            <li>Competition and Tournaments: The program organizes local and national tennis tournaments to provide Emirati players with competitive opportunities. This allows them to gain valuable experience and exposure to different playing styles.</li>
                            <li>Scholarships and Sponsorships: Talented players may be eligible for scholarships and sponsorships to support their tennis journey, including opportunities for international training and competition.</li>
                            <li>International Representation: The ultimate goal of the National Emirati Citizens Tennis Program is to have Emirati tennis players represent the UAE at international events, including the Olympics, Grand Slam tournaments, and Davis Cup competitions.</li>
                        </ul>
                        <p>By promoting tennis among Emirati citizens through these initiatives, the DSC aims to not only develop skilled tennis players but also foster a culture of fitness, sportsmanship, and healthy competition within its society. This program plays a crucial role in the broader strategy of the DSC.</p>",
            "lg_63" => "Our programs",
            "lg_64" => "العربية",
            "lg_65" => "ZGames",
            "lg_66" => "Let us know what you are contacting us for...",
            "lg_67" => "The accomplished Indian tennis icon, has taken on the prestigious role of becoming the brand ambassador for the Dubai Open Tennis Academies. With her stellar tennis career and global recognition, Sania brings immense credibility and appeal to this position. Her association underscores the commitment of the Dubai Open Tennis Academies to nurture talent, promote tennis excellence, and elevate the status of the sport in the region. Sania's influence as a role model and her dedication to tennis make her the ideal ambassador to inspire aspiring players and enhance the reputation of the academies as world-class tennis training centers. Her partnership with the Dubai Open Tennis Academies reinforces their commitment to fostering the next generation of tennis champions.",
            "lg_68" => "Dubai sports council, Dubai-UAE",
            "lg_69" => "The National Emirati Citizens Tennis Program is a comprehensive initiative launched by Dubai Sports Council in association With the renowned tennis Player Sania Mirza to promote and develop tennis among Emirati citizens. This program aims to foster a love for tennis, identify and nurture young talent, and ultimately enhance the presence of Emirati players on the international tennis stage.",
            "lg_70" => "The Inter-University Tennis League program is a competitive sporting initiative that will bring together universities and colleges to participate in organized tennis competitions.",
            "lg_71" => "Junior Registration",
            "lg_72" => "Senior Registration",
            "lg_73" => "Men",
            "lg_74" => "Women",
            "lg_75" => "Next",
            "lg_76" => "Choose category",
            "lg_77" => "Choose Junior category",
            "lg_78" => "Boys",
            "lg_79" => "Under 12 - Cut Off Date : > 2011",
            "lg_80" => "Under 14 - Cut Off Date : > 2009",
            "lg_81" => "Under 18 - Cut Off Date : > 2005",
            "lg_82" => "Girls",
            "lg_83" => "Choose play type",
            "lg_84" => "Single",
            "lg_85" => "Double",
            "lg_86" => "Registration form",
            "lg_87" => "Academy name",
            "lg_88" => "Academy email",
            "lg_89" => "<b>Note :</b> After the Form Submission , Our Operations Team will contact the applicant for further necessary requisite.",
            "lg_90" => "Submit",
            "lg_91" => "Player",
            "lg_92" => "Full name",
            "lg_93" => "Birth date",
            "lg_94" => "Gender",
            "lg_95" => "Male",
            "lg_96" => "Female",
            "lg_97" => "Email ID",
            "lg_98" => "Nationality",
            "lg_99" => "Choose",
            "lg_100" => "About us",    
            "lg_101" => "Sania Mirza,",    
            "lg_102" => "Select gender",    
            "lg_103" => "Women 35+",    
            "lg_104" => "Men 35+",    
            "lg_105" => "ZGames",    
            "lg_106" => "ZGames",    
            "lg_107" => "ZGames",    
            "lg_108" => "ZGames",    
            "lg_109" => "ZGames",    

            
        ),

        "AR" => array(
            "lg_01" => "الصفحة الرئيسية",
            "lg_03" => "القواعد و الأنظمة",
            "lg_02" => "تسجيلات دوتا",
            "lg_04" => "قسم الصور",
            "lg_05" => "اتصل بنا",
            "lg_06" => "من نحن؟",
            "lg_07" => "اقرأ المزيد",
            "lg_08" => "ما الذي يميزنا",
            "lg_09" => "بطولاتنا",
            "lg_10" => "الدوري المحلي الوطني",
            "lg_11" => "الدوري الجامعي",
            "lg_12" => "الدوري بين المدارس",
            "lg_13" => "دوتا",
            "lg_14" => "سفير العلامة التجارية",
            "lg_15" => "أفضل اللّحظات",
            "lg_16" => "الإسم",
            "lg_17" => "البريد الإلكتروني",
            "lg_18" => "رقم الهاتف",
            "lg_19" => "الموضوع",
            "lg_20" => "ارسال",
            "lg_21" => "التواريخ المقترحة:",
            "lg_22" => "تنسيق التعادل:",
            "lg_23" => "النقاط:",
            "lg_24" => "المشاركون:",
            "lg_25" => "الملاعب:",
            "lg_26" => "الفئات العمرية:",
            "lg_27" => "عدد اللاعبين في دوري الأطفال:",
            "lg_28" => "استخدام رسوم الدخول:",
            "lg_29" => "الموعد النهائي للدخول:",
            "lg_30" => "الرّسوم",
            "lg_31" => "إغلاق",
            "lg_32" => "سجل الآن",
            "lg_33" => "<b>للأطفال</b>: 2 فردي + 1 زوجي (الفئة العمريّة - أقل 12 سنة, أقل 14 سنة وأقل 18 سنة) <b>للكبار</b>: 2 فردي + 1 زوجي (الفردي المفتوح - قرعة على 64، الزوجي المفتوح - قرعة على 32)",
            "lg_34" => "الأفضل من 3 مجموعات، المجموعة النهائية 10 نقاط كسر التعادل، بدون نظام إعلاني، النهائيات (يتم تحديدها لاحقًا)",
            "lg_35" => "<b>دوري الاطفال:</b> يجوز للأندية الرياضية التابعة لشركة TE، والأكاديميات الخاصة، وشركات الخدمات الرياضية، والمراكز الرياضية والاجتماعية، الاشتراك بفريق واحد أو فريقين لكل فئة عمرية. <br> <b>الكبار:</b> التسجيل الإلزامي مع TE Pin.",
            "lg_36" => "<b>دوري الاطفال:</b> يجب أن تكون فرق المشاركين قادرة على لعب مواجهاتها على أرضها على ملعبين للعب 2 فردي متبوعًا بتحديد الزوجي في ملعب واحد، أو على ملعب واحد للعب الفردي 2 متبوعًا بالفردي 1 متبوعًا بالزوجي (كما هو الحال في كأس ديفيس GIII وGIV).",
            "lg_37" => "<p> دوري دوتا 2023/2024 مفتوح للفئات العمرية للأطفال التالية: </p>
                        <ul>
                            <li>تحت 12 سنة ذكور و بنات (ملاعب كاملة، كرات صفراء، فوق 8 سنوات)</li>
                            <li>تحت 14 سنة ذكور و بنات (ملاعب كاملة، كرات صفراء)</li>
                            <li>تحت 18 سنة ذكور و بنات (ملاعب كاملة، كرات صفراء)</li>
                        </ul>
                        <p> بطولة الرجال والسيدات المفتوحة (ملاعب كاملة، الكرات الصفراء، فوق 16 سنة) </p>",
            "lg_38" => "<p>يجب أن تتكون الفرق من لاعبين مسجلين في TE يمثلون مؤسسة تنس تابعة للموسم الجاري 2023/2024.</p>
                        <ul>
                            <li>فريق تحت 12 سنة: 4 إلى 6 لاعبين (الحد الأدنى 4 / الحد الأقصى 6)</li>
                            <li>فريق تحت 18 سنة: من 4 إلى 6 لاعبين (الحد الأدنى 4 / الحد الأقصى 6)</li>
                            <li>فريق تحت 14 سنة: 4 إلى 6 لاعبين (الحد الأدنى 4 / الحد الأقصى 6)</li>
                        </ul>
                        <p>لا يمكن للاعب واحد أن يمثل فريقين.</p>",
            "lg_39" => "<ul>
                            <li> إدارة الدوري</li>
                            <li>أقمصة للّاعبين أقل من 12, 14 و 18 عاما</li>
                            <li>ميداليات وشهادات للاعبين أقل من 12, 14 و 18 عاما</li>
                            <li>جوائز للفائزين (أجهزة آيفون، ساعات أبل، كؤوس، وهدايا مثيرة)</li>
                        </ul>",
            "lg_40" => "10 أكتوبر 2023",
            "lg_41" => "رسوم الدخول لفريق الأولاد: 700 درهم إماراتي",
            "lg_42" => "رسوم الدخول لفريق البنات: 700 درهم إماراتي",
            "lg_43" => "رسوم الدخول في البطولة المفتوحة للرجال (فردي): 250 درهماً إماراتياً",
            "lg_44" => "رسوم الدخول في البطولة المفتوحة للرجال (زوجي): 500 درهم",
            "lg_45" => "رسوم الدخول في البطولة المفتوحة للسيدات (فردي): 250 درهماً",
            "lg_46" => "رسوم الدخول في البطولة المفتوحة للسيدات (زوجي): 500 درهم",
            "lg_47" => "ما هي دوتا",
            "lg_48" => "\"بطولة أكاديميات دبي المفتوحة للتنس\" - بطولة رائدة تجمع أفضل مواهب التنس الشابة من جميع أنحاء العالم. تم تصميم هذا الحدث المميز حصريًا لأكاديميات التنس، حيث يوفر منصة فريدة للاعبين الناشئين لعرض مهاراتهم ومثابرتهم وروحهم الرياضية.",
            "lg_49" => "مع أفق دبي الشهير كخلفية لها، تتجاوز هذه البطولة المسابقات التقليدية. إنه احتفال بالتفاني والعمل الجماعي والسعي لتحقيق التميز. تهدف بطولتنا إلى توفير نقطة انطلاق للجيل القادم من نجوم التنس، وخلق بيئة يمكنهم من خلالها التعلم والمنافسة وترك بصماتهم على الساحة الدولية.",
            "lg_50" => "لا تعد \"بطولة أكاديميات دبي المفتوحة للتنس\" بإثارة مكثفة داخل الملعب فحسب، بل تعزز أيضًا الصداقة الحميمة والتبادل الثقافي بين المشاركين. إنها فرصة للأكاديميات لإظهار براعتهم التدريبية ولللاعبين لتكوين صداقات دائمة تتجاوز الحدود.",
            "lg_51" => "انضم إلينا في هذا الحدث الديناميكي حيث نوحد روح التنس مع حيوية دبي، مما يمهد الطريق لمنافسة ستشكل مستقبل هذه الرياضة. مرحبًا بكم معنا في بطولة هي أكثر من مجرد لعبة - إنها رحلة نمو وروح رياضية وشغف مشترك بالتنس.",
            "lg_52" => "التعليم يلتقي بالرياضة",
            "lg_53" => "منافسة ودية",
            "lg_54" => "تطوير المهارة",
            "lg_55" => "ذكريات مدى الحياة",
            "lg_56" => "نحن نؤمن إيمانًا راسخًا بقوة الجمع بين الأكاديميين والرياضة. يوفر دوري التنس بين المدارس فرصة فريدة للطلاب للتفوق ليس فقط في الفصل الدراسي ولكن أيضًا في ملعب التنس. ",
            "lg_57" => "تجتمع المدارس من جميع أنحاء المنطقة للتنافس، وتعزيز الصداقة الحميمة والمنافسة الصحية بين الطلاب. إنها فرصة للرياضيين الشباب لتمثيل مدارسهم بكل فخر.",
            "lg_58" => "الدوري الخاص بنا لا يتعلق فقط بالفوز بالمباريات؛ يتعلق الأمر بصقل المهارات وتحديد الأهداف الشخصية والسعي لتحقيق التميز. المدربون والموجهون ذوو الخبرة موجودون معنا لتوجيه رحلة كل لاعب.",
            "lg_59" => "دوري التنس بين المدارس هو المكان الذي تُصنع فيه ذكريات لا تُنسى. يتعلق الأمر بتكوين الصداقات وتعلم دروس الحياة وإنشاء القصص التي سيتم الاعتزاز بها لسنوات قادمة. ",
            "lg_60" => "",
            "lg_61" => "مبادرة رياضية تنافسية ستجمع بين الجامعات والكليات للمشاركة في مسابقات التنس المنظمة. ويهدف إلى الترويج للتنس كرياضة بين الطلاب، وتعزيز الصداقة الحميمة بين الكليات، وتوفير منصة للاعبي التنس الطموحين لعرض مهاراتهم. عادةً ما تشكل الجامعات فرقًا من اللاعبين الذين يمثلون مؤسستهم في سلسلة من المباريات أو البطولات ضد الجامعات الأخرى. غالبًا ما تتبع هذه الأحداث نظامًا منظمًا، مع مباريات فردية وزوجية، وقد تشمل قسمي الرجال والسيدات. يشجع برنامج دوري التنس بين الجامعات الروح الرياضية والعمل الجماعي والمنافسة الصحية بين الطلاب، مما يساهم في ثقافة رياضية جماعية نابضة بالحياة.",
            "lg_62" => "<p>البرنامج الوطني للمواطنين الإماراتيين للتنس هو مبادرة شاملة أطلقها مجلس دبي الرياضي بالتعاون مع لاعبة التنس الشهيرة سانيا ميرزا لتعزيز وتطوير لعبة التنس بين المواطنين الإماراتيين. ويهدف هذا البرنامج إلى تعزيز حب التنس، وتحديد المواهب الشابة ورعايتها، وتعزيز حضور اللاعبين الإماراتيين على مسرح التنس الدولي.</p>
                        <p>تشمل المكونات الرئيسية للبرنامج ما يلي:</p>
                        <ul>
                            <li>​التنمية الشعبية: يبدأ البرنامج بتقديم لعبة التنس على المستوى الشعبي في المدارس والمجتمعات في جميع أنحاء دولة الإمارات العربية المتحدة. ويوفر الوصول إلى التدريب والمرافق والمعدات لتشجيع المشاركة بين الشباب الإماراتي.</li>
                            <li>​تحديد المواهب: يتضمن البرنامج تحديد المواهب واستكشافها لتحديد اللاعبين الشباب الواعدين من خلال تنظيم عمليات البحث عن المواهب التي لديها القدرة على التفوق في لعبة التنس. ويتم بعد ذلك تزويد هؤلاء الأفراد بالتدريب والدعم المتخصص.</li>
                            <li>سيحصل لاعبو التنس الإماراتيون على تدريب ودروس تدريبية عالية الجودة بمجرد اختيارهم من سانيا ميرزا نفسها، ويشمل ذلك التطوير الفني والتكتيكي والبدني لمساعدتهم على المنافسة على أعلى المستويات.</li>
                            <li>ينظم البرنامج بطولات التنس المحلية والوطنية لإتاحة الفرص التنافسية للاعبين الإماراتيين. يتيح لهم ذلك اكتساب خبرة قيمة والتعرف على أساليب اللعب المختلفة.</li>
                            <li>المنح الدراسية والرعاية: قد يكون اللاعبون الموهوبون مؤهلين للحصول على منح دراسية ورعاية لدعم رحلة التنس الخاصة بهم، بما في ذلك فرص التدريب والمنافسة الدولية.</li>
                            <li>الهدف النهائي للبرنامج الوطني للمواطنين الإماراتيين للتنس هو أن يمثل لاعبو التنس الإماراتيون دولة الإمارات في الأحداث الدولية، بما في ذلك الألعاب الأولمبية، وبطولات جراند سلام، ومسابقات كأس ديفيز.</li>
                        </ul>
                        <p>الهدف النهائي للبرنامج الوطني للمواطنين الإماراتيين للتنس هو أن يمثل لاعبو التنس الإماراتيون دولة الإمارات في الأحداث الدولية، بما في ذلك الألعاب الأولمبية، وبطولات جراند سلام، ومسابقات كأس ديفيز.</p>",
            "lg_63" => "برامجنا",
            "lg_64" => "English",
            "lg_65" => "ZGames",
            "lg_66" => "أخبرنا عن التفاصيل...",
            "lg_67" => "تولت سانيا ميرزا، أيقونة التنس الهندية البارزة، الدور المرموق لتصبح سفيرة العلامة التجارية لبطولة الأكاديميات دبي المفتوحة للتنس. بفضل مسيرتها الرائعة في رياضة التنس والاعتراف العالمي، تضفي سانيا مصداقية هائلة وجاذبية على هذا المنصب. ويؤكد جمعيتها التزام بطولة أكاديميات دبي المفتوحة للتنس برعاية المواهب وتعزيز التميز في لعبة التنس ورفع مكانة هذه الرياضة في المنطقة. إن تأثير سانيا كنموذج يحتذى به وتفانيها في رياضة التنس يجعلها السفيرة المثالية لإلهام اللاعبين الطموحين وتعزيز سمعة الأكاديميات كمراكز تدريب تنس عالمية المستوى. وتعزز شراكتها مع بطولة أكاديميات دبي المفتوحة للتنس التزامها بتعزيز مستوى الجيل القادم من أبطال التنس.",
            "lg_68" => "مجلس دبي الرياضي، دبي - الإمارات العربية المتحدة",
            "lg_69" => "الدوري المحلي الوطني - البرنامج الوطني للمواطنين الإماراتيين للتنس هو مبادرة شاملة أطلقها مجلس دبي الرياضي بالتعاون مع لاعبة التنس الشهيرة سانيا ميرزا لتعزيز وتطوير لعبة التنس بين المواطنين الإماراتيين. ويهدف هذا البرنامج إلى تعزيز حب التنس، وتحديد المواهب الشابة ورعايتها، وتعزيز حضور اللاعبين الإماراتيين على مسرح التنس الدولي.",
            "lg_70" => "مبادرة رياضية تنافسية ستجمع بين الجامعات والكليات للمشاركة في مسابقات التنس المنظمة. ",
            "lg_71" => "تسجيل الناشئين",
            "lg_72" => "تسجيل الكبار",
            "lg_73" => "رجال",
            "lg_74" => "سيدات",
            "lg_75" => "التالي",
            "lg_76" => "اختر الفئة",
            "lg_77" => "إختر فئة الناشئين",
            "lg_78" => "ذكور",
            "lg_79" => "أقل من 12 عامًا - تاريخ التوقف: > 2011",
            "lg_80" => "أقل من 14 عامًا - تاريخ التوقف: > 2009",
            "lg_81" => "أقل من 18 عامًا - تاريخ التوقف: > 2005",
            "lg_82" => "بنات",
            "lg_83" => "إختر نوع اللّعب",
            "lg_84" => "فردي",
            "lg_85" => "زوجي",
            "lg_86" => "استمارة التسجيل",
            "lg_87" => "اسم الأكاديمية",
            "lg_88" => "البريد الإلكتروني للأكاديمية",
            "lg_89" => "بعد تقديم الإستمارة، سيقوم فريق العمليات لدينا بالاتصال بمقدم الطلب للحصول على المتطلبات الضرورية الأخرى.",
            "lg_90" => "تقديم",
            "lg_91" => "لاعب",
            "lg_92" => "الإسم الكامل",
            "lg_93" => "تاريخ الإزدياد",
            "lg_94" => "الجنس",
            "lg_95" => "ذكر",
            "lg_96" => "أنثى",
            "lg_97" => "البريد الالكتروني",
            "lg_98" => "الجنسيّة",
            "lg_99" => "اختر",
            "lg_100" => "معلومات عنا",
            "lg_101" => "صانيا ميراز",
            "lg_102" => "قم بتحديد الجنس",
            "lg_103" => "سيدات 35+",
            "lg_104" => "رجال 35+",
            "lg_105" => "",
            "lg_106" => "",
            "lg_107" => "",
            "lg_108" => "",
            "lg_109" => "",
    
        )
    );
    
    if(array_key_exists($lg_code , $lg_texts) && array_key_exists($txt_code , $lg_texts[$lg_code]))
    return $lg_texts[$lg_code][$txt_code];
    else
    return $lg_texts["EN"][$txt_code];


}

}


if(!function_exists("content_from_right")){

    function content_from_right($echo=true){
            switch (get_cookie("language")) {
                case 'AR':
                    # code...
                    if($echo)
                    echo 'dir="rtl"';
                    else
                    return 'dir="rtl"';
                    break;
                
                default:
                    # code...
                    echo '';
                    break;
            }
    }

}

if(!function_exists("text_from_right")){

    function text_from_right($display = true){
            switch (get_cookie("language")) {
                case 'AR':
                    # code...
                    if($display)
                    echo 'text-right';
                    else
                    return 'text-right';
                    break;
                
                default:
                    # code...
                    echo "";
                    break;
            }
    }

}

if(!function_exists("text_from_left")){

    function text_from_left($display = true){
            switch (get_cookie("language")) {
                case 'AR':
                    # code...
                    if($display)
                    echo 'text-left';
                    else
                    return 'text-left';
                    break;
                
                default:
                    # code...
                    if($display)
                    echo 'text-right';
                    else
                    return 'text-right';
                    break;
            }
    }

}

if(!function_exists("content_reversed")){

    function content_reversed(){
            switch (get_cookie("language")) {
                case 'AR':
                    # code...
                    echo 'flex-row-reverse';
                    break;
                
                default:
                    # code...
                    echo '';
                    break;
            }
    }

}

if(!function_exists("lg_put_text")){
    function lg_put_text($eng_text , $ara_text , $echo=true){

        if($echo){
            if(get_cookie("language") == "AR"){
                if($ara_text !== null && trim($ara_text) !== "")
                echo $ara_text;
                else echo $eng_text;
            }

    
            else
            echo $eng_text;
            
        }
        else{
            if(get_cookie("language") == "AR"){
                if($ara_text !== null && trim($ara_text) !== "")
                return $ara_text;
                else return $eng_text;
            }
            else
            return $eng_text;

            
        }
         
    }
}

if(!function_exists("disctionary")){
    function dictionary(){
        $dictionary = [
            "single" => "فردي",
            "double" => "زوجي",
            "women" => "نساء",
            "men" => "رجال",
            "men-35-plus" => "رجال أكبر من 35",
            "women-35-plus" => "سيدات أكبر من 35",
            "senior" => "كبار",
            "junior" => "الناشئين",
        ];

        return $dictionary;
    }
         
}