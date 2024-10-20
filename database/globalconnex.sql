-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2024 at 11:10 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `globalconnex`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_message`
--

CREATE TABLE `about_message` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `name` text NOT NULL,
  `designation` text NOT NULL,
  `message` text NOT NULL,
  `d_date` varchar(20) NOT NULL,
  `d_time` varchar(20) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_message`
--

INSERT INTO `about_message` (`id`, `image`, `name`, `designation`, `message`, `d_date`, `d_time`, `status`) VALUES
(1, 'e664a8188fe54be8ff92482d67fdc47e.JPG', 'Aleesha Brown', 'CEO', 'As the CEO of Global Connex Pty Ltd , I\'m responsible for the overall strategic vision, guiding the decisions and operations of the company while ensuring compliance with both legal and administrative policies. My primary duties include overseeing the development and execution of both short-term and long-term plans in line with the overall direction of the business, developing and implementing strategic strategies, ensuring effective communication and compliance to both external and internal standards, and providing general operational, financial, and personnel management. Additionally, I\'m responsible for evaluating, monitoring, and assessing the performance of both the organization and our team members to ensure they are meeting company goals and objectives. Working directly with our team I\'m able to provide them with assistance and guidance to drive positive results in areas such as communication, client satisfaction, and organizational goal-setting.', '2023-10-18', '15:34:03', 1);

-- --------------------------------------------------------

--
-- Table structure for table `career_counseling`
--

CREATE TABLE `career_counseling` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `title` text NOT NULL,
  `text` text NOT NULL,
  `d_date` varchar(20) NOT NULL,
  `d_time` varchar(20) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `career_counseling`
--

INSERT INTO `career_counseling` (`id`, `image`, `title`, `text`, `d_date`, `d_time`, `status`) VALUES
(1, 'a4572fb920c57e035a19f2131724ee6a.png', '<h6>Personalized Career Assessments:</h6>', 'Our experienced career counselors conduct in-depth assessments to identify your strengths, interests, values, and goals. These insights form the foundation of your personalized career roadmap.<br>\r\n\r\n<h6>Career Exploration:</h6>\r\nExplore a wide array of career options aligned with your skills and passions. We provide detailed information about various industries, job roles, and emerging fields to help you make informed decisions.<br>\r\n\r\n<h6>Goal Setting:</h6>\r\nCollaboratively set achievable short-term and long-term career goals. Our counselors assist you in defining realistic objectives and creating actionable plans to attain them.\r\n\r\n<h6>Job Search Strategies:</h6>\r\nLearn proven strategies for effective job hunting. We provide guidance on networking, online job portals, social media, and hidden job markets, helping you tap into various opportunities.<br>\r\n<h6>Interview Preparation:</h6>\r\nMaster the art of interviews with our tailored coaching sessions. Practice common interview questions, refine your responses, and develop confidence-building techniques to excel in interviews.<br>\r\n<h6>Entrepreneurship Guidance:</h6>\r\nIf you are considering entrepreneurship, we offer valuable insights into starting and managing your own business. From business plans to funding strategies, we provide the resources you need for a successful venture.<br>\r\n<h6>Professional Development:</h6>\r\nEnhance your skills and knowledge with our professional development resources. We offer recommendations for relevant courses, certifications, workshops, and seminars to boost your expertise.<br>', '2023-10-25', '11:03:43', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cms_slider`
--

CREATE TABLE `cms_slider` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `title` text NOT NULL,
  `big_text` text NOT NULL,
  `small_text` text NOT NULL,
  `d_date` varchar(50) NOT NULL,
  `d_time` varchar(50) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cms_slider`
--

INSERT INTO `cms_slider` (`id`, `image`, `title`, `big_text`, `small_text`, `d_date`, `d_time`, `status`) VALUES
(1, '47b76250e4b7c104bea8c8bac88a1d53.jpg', 'Solutions for all type of visas', 'Trusted', 'Visa & Recruitment Company', '2024-03-28', '22:50:59', 1),
(2, '0d69393c5edefdefc65feead5454b1c8.jpg', 'Solutions for all type of visas', 'Trusted', 'Visa & Recruitment Company', '2024-03-28', '22:52:49', 1);

-- --------------------------------------------------------

--
-- Table structure for table `company_profile`
--

CREATE TABLE `company_profile` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `title` text NOT NULL,
  `details` text NOT NULL,
  `d_date` varchar(20) NOT NULL,
  `d_time` varchar(20) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_profile`
--

INSERT INTO `company_profile` (`id`, `image`, `title`, `details`, `d_date`, `d_time`, `status`) VALUES
(1, 'not set', 'Introduction', 'Global Connex Pty Ltd was established in 2018 as an immigration and overseas education consultancy based in Australia. Global Connex Pty Ltd consists of four divisions: education admission services, migration services, and settlement services (jobs, accommodation, and career development). We possess a rich understanding of what students and migrants desire when seeking opportunities abroad.<br><br>\r\nWe are led by a high-quality group of professionals with in-depth expertise in overseas education and global migration counseling. We have years of first-hand experience and continue to maintain links with students and universities in Australia, New Zealand, Canada, Sweden and Malaysia. As a result, we can give students insightful, accurate, and specialist advice on living and studying abroad.<br><br>\r\nOverseas Education: We are Promoting 50+ government- or private-approved / and universities in Australia, Canada, and New Zealand directly or through our associates for Study Abroad.\r\nImmigration Consultation: We are offering better guidance to clients for Work permits and permanent residence (PR) in foreign countries like Canada, Australia, and New Zealand, with 50+ Programs.\r\nEvery year, we provide all kinds of assistance to students in different sessions for admission in various universities in Australia, New Zealand, Canada, Sweden and Malaysia in the subjects of their choice.\r\n', '2023-10-21', '15:20:08', 1);

-- --------------------------------------------------------

--
-- Table structure for table `country_serve_australia`
--

CREATE TABLE `country_serve_australia` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `text` text NOT NULL,
  `d_date` varchar(20) NOT NULL,
  `d_time` varchar(20) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country_serve_australia`
--

INSERT INTO `country_serve_australia` (`id`, `image`, `text`, `d_date`, `d_time`, `status`) VALUES
(1, 'country_Serve.jpg', '<h6>Study in Australia Overview: </h6>\r\n\r\n•Australia is one of the fastest-growing economies-across the globe, despite being one of the least populated countries. It is also a highly sought-after destination for international students due to its natural beauty and advanced lifestyle. Australia continues to attract thousands of students to enroll in its leading schools, colleges, and universities.<br>\r\n\r\n•There are ample job opportunities for international students, allowing them to work part-time during their study terms and full-time during vacations. Throughout your study period in Australia, you can sponsor family members and dependents who can stay with you. However, upon completing your studies, they must return with you to your home country.<br>\r\n\r\n•An additional benefit is that after finishing your studies in Australia, you may apply for Permanent Residence (PR) status. After a certain period, you can take up full employment, eventually leading to obtaining Australian citizenship, which is a requirement to meeting the prescribed criteria.<br>\r\n\r\n\r\n<h6>Benefits of studying in Australia</h6>\r\n\r\n-	High-quality education <br>\r\n-	Renowned for research and training methodologies <br>\r\n-	Several internationally accredited universities <br>\r\n-	Education system recognized worldwide with a wide variety of programs. <br>\r\n-	The government offers numerous international scholarships. <br>\r\n-	Diversity of educational programs <br>\r\n-	Beautiful country with a wonderful population <br>\r\n-	Booming economy with opportunities in all sectors <br>\r\n-	Work opportunities available post studies <br>\r\n-	World-class universities with excellent infrastructure and facilities <br>\r\n\r\n<h6>Why Study in Australia:</h6> \r\nInternational students consider Australia a highly appealing and attractive study destination due to its affordable educational costs and the provision of high-quality education by colleges and universities. The living conditions and lifestyle are also excellent, reflecting the tolerant multicultural society prevalent in the country.<br>\r\n\r\nHigher education in Australia is recognized for providing value for money through shorter and more intensive courses. These courses quickly incorporate the latest innovations in science and technology, as well as modern trends in marketing and management, into the diploma/degree programs offered. This practical and responsive approach makes Australian education stand out, meeting the diverse needs of various sectors such as business, trade, industry, commerce, banking and many more.<br>\r\n\r\nAustralia as a study destination is further underscored by several key factors:<br><br>\r\n\r\n-	Duration for master’s courses: 1 year, 1.5 years, and 2 years <br>\r\n-	Affordable tuition and living costs. <br>\r\n-	Worldwide recognition and acceptance of Australian education <br>\r\n-	Excellent research facilities with state-of-the-art equipment in laboratories <br>\r\n-	Straightforward, fair, transparent, and hassle-free visa process <br>\r\n-	Highly qualified teaching faculties recruited globally. <br>\r\n-	Global job opportunities for Australian academics and graduates <br>\r\n-	The ESOS Act safeguards the interests of international students. <br>\r\n-	Australia is known for being a very safe country. <br>\r\n-	Pleasant climate throughout the year <br>\r\n-	Stable democracy, fast-growing economy, and friendly people <br>\r\n\r\nA notable aspect of quality assurance in Australian education is the CRICOS Code assigned by the Australian Government to every course offered by colleges or universities. This code ensures that the education system is fully controlled and regulated by the government, emphasizing a commitment to quality assurance. <br>\r\n\r\n<h6>Education System in Australia:</h6>\r\n\r\nInternational Students in Australia have access to one of the highest standards of quality education that is well-defined, administered and imparted.<br>\r\n\r\n<h6>Primary School:</h6>\r\n\r\nEducation in Australia typically begins at age seven, with children starting at 5 years (Year-1) and completing their general education by the age of 12 (Year-7). This foundational education prepares students for societal roles and readies them for the next level, which is Secondary School.<br>\r\n\r\n<h6>Secondary School:</h6>\r\n\r\nSecondary education begins in Year-8 at the age of 12 and is mandatory until Year-10, constituting two years of \'junior high school.\' After completing junior high, students can opt for vocational education, apprenticeship training, or decide to continue their studies. If they choose the latter, an additional two years of \'high school diploma\' (Year-12) is mandatory, leading to further education in Tertiary School.<br>\r\n\r\n<h6>Tertiary School:</h6>\r\n\r\n•After completing their Final Year (Year-12), Students enter Tertiary (Higher Education) education that awards degree such as Bachelor’s, Master’s and Doctoral Studies. It is usual to find that the majority of International Student comes to Australia to pursue Tertiary Level Education since they have already completed their Primary and Secondary Education in their home countries.<br>\r\n\r\n•Besides the three distinct types of Education Systems that Australia offers, other types offered are mentioned below.<br>\r\n\r\n•Vocational Education & Training (VET)<br>\r\n\r\n•TAFE (Technical and Further Education):<br>\r\n\r\n•These Courses are offered by colleges and other private institutions in Australia with course tenures ranging from one to two years and depending on the field of study and knowledge of employment experience.<br>\r\n\r\n<h6>Diploma:</h6>\r\n\r\n•It is a 1-2 year full time course of study that offers high professional qualification. Diploma under AQF is a dual-sector qualification – higher education sector and vocational education & training sector. Diploma of higher education sector is depended on the selection of the academic program by the functional focus that provides general or specified training for employment at high professional level. They can coherent to advanced diploma courses and can provide advanced standing or credit transfer (usually one year) into a Bachelor Degree program.<br>\r\n\r\n<h6>Advanced Diploma:</h6>\r\n•Advanced Diploma under AQF is a dual-sector qualification – higher education sector and vocational education and training sector. It is a Specialized Level requiring 2 years of full-time study with units from Bachelor’s Degree. This provides exit point with a stand-alone requirement featuring an option to pursue a Bachelor’s Degree.<br>\r\n\r\n•Note: Advanced Diplomas can provide advanced standing or credit transfer (usually two years) into a Bachelor Degree Program.<br>\r\n\r\n<h6>Associate Degree:</h6>\r\n•For being eligible for the 2 years of full-time education program you need to have one or more academic disciplines and the progress of standard work skills. The Program highlights preliminary research-based expertise and provides advanced standing or credit transfer (usually two years) into a Bachelor Degree program in the same field.<br>\r\n\r\n<h6>Foundation Courses (For International Students):</h6>\r\n•These Courses are most suitable for those International Students looking for an Australian Bachelor’s Degree especially intending to pursue courses in medical/paramedical/science. More importantly, these Foundation Courses are for those who fail get the required minimum scores in their Year-12 of study (Secondary School Education level in their home country).<br>\r\n\r\n•The Intake months for enrolling in Foundation Courses in Australia are in mostly January, June and October of every year.<br>\r\n\r\n<h6>Bachelor Degree:</h6>\r\n•Once you acquire your Recognized Australia Bachelors Degree, you would be lucky enough to experience a modern and inspiring culture deeply ensconced in the lifestyle of modern day Australia! Divisions in Bachelor’s Degree Program of Australia includes ‘3-year degrees’, ‘4-year degrees’, ‘professional degrees’, ‘combined degrees’ and ‘Honors degrees’.<br>\r\n\r\n<h6>Postgraduate Education:</h6>\r\n•For admission into an Australian Master’ Degree (Postgraduate Program), it is essential that you complete your Bachelor’s Degree with certain exceptions for pertinent work experience which is a prerequisite. Additionally, you also need to have completed one or more academic disciplines and achieved progress in standard work skills. The qualifications are based on the institution and the course for Master’s Degree adopted.<br>\r\n\r\n•Assessment for admission into your Master’s Degree Program will be based on the following determining factors beside level of university in your own country.<br>\r\n\r\n•Master Degree by Coursework – Bachelor Degree, Honors’ Bachelor Degree or Graduate Diploma.<br>\r\n\r\n•Master Degree by Research – Bachelor Honors’ Degree, Master’s Preliminary Year, a Research-based Graduate Diploma (or equivalent Research experience).<br>\r\n\r\n•Professional Master Degree – Bachelor Degree with appropriate work experience. Further, an entry may also be based on articulation from a Graduate Certificate or Graduate Diploma Program.<br>\r\n\r\n<h6>Doctoral Degree:</h6>\r\n•Australian Doctorate Degree Programs require a minimum qualification of Master’s Degree or equivalent qualification in your chosen field of study. These Programs are the top level of education award offered by universities in Australia. On the other hand, if you hold a Degree with work experience you should articulate eloquently, the knowledge of the discipline in which you plan to initiate your research.<br>\r\n\r\n<h6>Research Doctorate:</h6>\r\n•Entry is made on the basis of a Research or Part-research Master’s Degree or a Bachelor Honors’ Degree (First or Second Class, Upper Division).<br>\r\n\r\n<h6>Professional Doctorate:</h6>\r\n•Entry is on the basis of a fine combination of Research and Coursework Master’s Degree, (or) by a Bachelor Honors’ Degree (First or Second Class, Upper Division) or equivalent.<br>\r\n\r\n<h6>Credit Transfer:</h6>\r\n•This System appreciates your student-preceding level of education so that your study is repeated. Credit Transfer facility is available for both Undergraduate and Postgraduate Courses. This System is more complex than it seems as it is highly dependent on the formal study for which recognition is required. Once you succeed in getting your Credit Transfers, it will help you to move between courses and institutions. You will also be able to utilize various opportunities to accomplish your prospective employment and respond effectively to them.<br>\r\n\r\n<h6>Academic Year:</h6>\r\n•Commences in the month of February ending in November of every year. However, many universities and colleges in Australia also accept enrolments in July. It is usual for universities and vocational institutes to conduct semester end exams in June and November. After such exams, there is a four to six week break between semesters followed by a long summer holiday (from December to February). This is your golden opportunity to work Full-Time and earn some extra welcome cash! Some institutions operate on a three semester (trimester) calendar or a four semester (terms) calendar.<br>\r\n\r\n<h6>Student visa options:</h6>\r\n•Student Visa ( Subclass 500)<br>\r\n•Student Guardian visa (subclass 590)<br>\r\n<h6>Study & Living Expenses:</h6>\r\nExpenses per year per individual student (in Sydney):<br>\r\n\r\n•Approximately $9,000 – $11,000/- for rent, food, local transport, telephone, gas/electricity, school stationary, clothing and entertainment. This includes weekly grocery bill (about $55 per person per week).<br>\r\n\r\n<h6>Student Card:</h6>\r\n\r\n•Your Student Card is one of the most valuable money-saving tools ever! Use it for cheap entry into museums, cinemas, theatres as well as on-campus services.<br>\r\n\r\n<h6>Cheap Textbooks:</h6>\r\n\r\nFor second-hand books at amazingly affordable prices, do visit your local Co Op book store often!<br><br>\r\n\r\nList of common costs (all prices are in Australian dollars)<br>\r\n\r\n•	Apartments/Flats: 1 bedroom $170 – $250 per week<br>\r\n•	Apartments / Flats: 2 bedrooms $180 – $300 per week<br>\r\n•	Room in share house $80 – $150 per week<br>\r\n•	House: 2/3 bedroom $250 – $550\r\n•	Movies: $14<br>\r\n•	Eating Out: $30+<br>\r\n•	Take away food: $10 – $17<br>\r\n•	A cup of coffee / tea: $2.50<br>\r\n•	Fast food (McDonalds, Burger King, KFC): $5 – $10<br>\r\n\r\n\r\n<h6>Meal Deals & Happy Hour:</h6>\r\n\r\n•You can avail special meal deals at many restaurants in cities around lunch-time and bars that have happy hours (usually between 5pm and 6pm or 6pm and 7pm). Happy hours means you can buy cheap drinks (if you drink!). Hunt for great money-saving local bargains.<br>\r\n\r\n<h6>Free Magazines and Newspapers:</h6>\r\n\r\n•Check out the free magazines that are distributed throughout cities. Look out for them as these are freely distributed in subways and on the streets, in cafes, shops and bars, in fact wherever you go! Look out for highly valuable information ABOUT JOBS besides other entertaining news about what’s on in your city!<br><br>\r\n\r\nClick on the following link to compare the average cost of living in your country with the cost of living in Sydney: <br>\r\n•	http://moneymanager.com.au/tools/calculators/costofliving.html<br>\r\n\r\n<h6>Student Life in Australia:</h6>\r\nLiving life in Australia as an International Student is FUN! If you are living in glamorous Melbourne, Sydney or Adelaide, you can live life to its fullest pleasures. But as an International Student you will be lost like an “Alice in Wonderland”. Hence we at SIEC have complied some very useful information to help you settle down faster and easier!<br>\r\n\r\n<h6>Application Procedure:</h6>\r\n\r\n<h6>Intakes:</h6>\r\n\r\n•There are generally TWO Intakes in Australia – February and July of every year. Yet, very few Universities offer multiple intakes in September and November.<br>\r\n\r\n•Strongly Recommended: Make your applications 7-8 months prior to the intake deadlines. Universities generally take around 4-6 weeks to process your applications.<br>\r\n\r\n<h6>Documents needed:</h6>\r\n\r\n•	An application<br>\r\n•	Resume<br>\r\n•	Statement of Purpose<br>\r\n•	Mark Sheets/Transcripts<br>\r\n•	Passing Certificates (from Class 10 onwards)<br>\r\n•	Two Reference Letters (from colleges/employers)<br>\r\n•	Passport copy or Birth Certificate<br>\r\n•	IELTS Score Sheet<br>\r\n\r\n\r\n<h6>Entry Requirements:</h6>\r\n\r\n<h6>Undergraduate – Bachelors:</h6>\r\n\r\n•A good academic record in High School Certificate or 12 years of schooling<br>\r\n•Some courses such as Computing and Engineering will require Mathematics and /or Science as pre-requisites<br>\r\n•6.0 IELTS<br>\r\n\r\n<h6>Postgraduate – Masters:</h6>\r\n\r\n•	A good academic record in Bachelors Degree from a recognized university is necessary<br>\r\n•	Any work experience in the field will be helpful<br>\r\n•	For MBA programs at some Universities students need to have work experience along with their Bachelors Degree<br>\r\n•	6.5 IELTS<br>\r\n\r\n<h6>Visa Guideline: </h6>\r\nSimple Australia Student Visa Application Procedure <br><br>\r\n\r\n•	Submit your Application for admission to your chosen university.<br>\r\n•	Receive an Offer Letter<br>\r\n•	Complete the Electronic Confirmation of Enrolment (eCoE) (It is advisable to wait till you get the guidance from the university to obtain your eCoE).<br>\r\n•	They University will provide you information regarding how to apply and what documents are required to be enclosed with your application.<br>\r\n•	To complete the process, make payment of the prescribed tuition fees<br>\r\n•	See if you need to pay other fees such as Overseas Student Health Cover and Application Fee (if any).<br>\r\n\r\n<h6>What is eCoE – Electronic Confirmation of Enrolment?</h6>\r\n\r\n•	An eCoE is the certificate issued by the DIBP for the students to confirm the acceptance of their admission in the university the student has applied and which is an essential requirement for the processing of the visas application or for visa extension.<br>\r\n•	In either case, the importance of an eCoE can never be underestimated or ignored.<br>\r\n•	Before the issuance of an eCoE, students have to undergo a Pre-Visa Assessment (PVA) based on the nationality and principal course of study.<br>\r\n•	To be eligible for the student visa, students have to enroll in an Australian university/institution and receive an eCoE.<br>\r\n•	The eCoE Form includes the critical information such as the course starting date, ending date and other codes used by the DIBP (Department of Immigration and Border Protection) that students have to be aware of.<br>\r\n•	Typically an eCoE will be issued after the university receives the student’s tuition fee.<br>\r\n•	A copy of your eCoE must be submitted to your local DIBP (Department of Immigration and Border Protection) office before your Australia Student Visa can be issued.<br>\r\n\r\n<h6>English Language Requirements:</h6>\r\n\r\n•	If you are an International student belonging to a non-English speaking (Native speakers of English language) country, you have to take an IELTS/TOEFL test to prove your English language abilities.<br>\r\n\r\n<h6>Essential Conditions for Australia Student Visa</h6>\r\n\r\nInternational Students have to:<br>\r\n\r\n•	Pursue a consistent study program that is recognized by the Australian government<br>\r\n•	Fulfill all the requirements of the study program<br>\r\n•	Maintain a valid enrolment – attendance requirements may apply<br>\r\n•	And can work without getting any additional permission<br>\r\n•	And are not allowed to work for more than 40 hours fortnightly during their semester, except any specific permission.<br>\r\n•	Sustain their OSHC (Overseas Student Health Cover) all the time during their stay in Australia.<br>\r\n•	And Students under the age of 18 years have to arrange for their accommodation, support and general welfare provisions certified by the Australian government – DIBP.<br><br>\r\n \r\nIn case of changing the residence or other arrangements students have to get the written approval from the Government of Australia.<br><br>\r\n\r\nNote: International Students cannot stay in Australia beyond their visa expiry date, unless it is an extremely critical situation.<br>\r\n\r\n<h6>Required Documents – A CHECKLIST</h6>\r\n\r\nStudents applying for Australian Student Visa have to carry the following list of documents to file for processing their applications:<br><br>\r\n\r\n•	Visa Application Charge payable through Credit Card<br>\r\n•	Additional Information Form 1221<br>\r\n•	Electronic Confirmation of Enrolment (eCoE) issued by your education provider for the course(s) you are undertaking stating the course, total tuition fees, duration and the course start date along with OSHC<br>\r\n•	Letter of Offer issued by your education provider for the course(s) you are undertaking stating the course, total tuition fees, duration and the course start date.<br>\r\n•	Original Passport (min 6 months validity)<br>\r\n•	Copy of the passport (Notarized)<br>\r\n•	Four recent passport sized photographs (Light colour back ground)<br>\r\n•	Statement of Purpose (Original – Signed by the student)<br>\r\n•	Academic Certificates (ORIGINALS)<br>\r\n•	Copies Academic Certificates (Notarized)<br>\r\n•	Work Experience Certificate (on the original company letter heads)<br>\r\n•	Copies of the Work Experience Certificates (Notarized)<br>\r\n•	IELTS Score Card (ORIGINAL) / TOEFL / PEARSON<br>\r\n•	Copy of the IELTS Score Card (Notarized)<br>\r\n•	Evidence of Liquid Funds<br>\r\n•	Evidence of Income<br>\r\n•	Affidavit of Support by the Sponsors<br>\r\n•	Student Affidavit, if the student is self sponsoring for his studies in Australia<br>\r\n•	Evidence of Relationship (Dependents)<br>\r\n•	Documents of dependents included in the application- Birth Certificate, Marriage certificate and evidence of marriage (Photos etc.)<br><br>\r\n\r\n<h6>Work Permits for Students:</h6>\r\n•	Working Opportunities during Study<br>\r\n•	Students are allowed to work 40 hours fortnightly during study and full time during vacations.<br>\r\n\r\n<h6>Post Study Work Permit:</h6>\r\n•	Upon completion of Bachelor, Master or Doctoral degree from recognized institution, student is eligible to obtain two year post study work permit. Now any qualification below degree level will be considered for PSW. Study resulting in a diploma level qualification or trade qualification will not be considered.<br>\r\n\r\n<h6>Conditions of PSW:</h6>\r\n\r\n•	Student must have completed a single qualification comprised of minimum two academic years study or multiple qualifications completed in a total period of at least two academic years.<br>\r\n•	Qualification must be through the Commonwealth Register of Institutions and Course for Overseas Students (CRICOS).<br>\r\n•	Qualification must complete and conducted in English language.<br>\r\n•	Student has been physically remained in Australia for minimum two year duration of course.<br>\r\n•	Student must have hold valid student visa.<br>\r\n•	Qualification used to fulfill the Australian study requirement must have been undertaken at any education provider which is accrediting to offer degree level programs.<br>\r\n•	Any qualification will be counted only once towards the Australian study requirement for PSW and any stay for English language proficiency courses (ELICOS) cannot be used to meet the Australian study requirement.<br>\r\n•	Two academic years study is considered 92 weeks of study but students may take longer to complete the course, but will only be credited with the number of weeks that CRICOS determines as a standard duration. Like, if student complete a course in 92 weeks but according to CRICOS it is 78 weeks course, then student will only receive credit of 78 weeks.<br>\r\n•	Failed subjects will not be considered.<br>\r\n•	Study completed outside Australia cannot be considered to fulfill the Australian study requirement.<br>\r\n•	An eligible degree level of qualification is minimum Bachelor degree or above like Masters by coursework degree, Masters (extended) degree, Masters by research degree or Doctoral degree. Remember degree level courses which are packaged with a Graduate Certificate or Graduate Diploma course may be considered if Australian study requirement is met. Example: Students who complete a Graduate Diploma in Educational Studies which articulates (or leads) into a Master of Education are able to use both the study at the Graduate Diploma and at the Masters level towards meeting this requirement. Example: Students who complete a Bachelor of Arts and then a Graduate Diploma in Asia-Pacific Studies will only have study undertaken at the Bachelor degree level considered, as the Graduate Diploma did not contribute towards the conferral of an eligible degree level qualification. <br>\r\n\r\n<h6>Jobs:</h6>\r\n•	For many one of the top priorities on arrival in Australia is finding a job, either part-time or full-time, depending on the type of visa you hold. For some of you, this might be casual work, such as working in a café or restaurant or as a waiter/waitress, for others you may have skills enough to work in an office.<br>\r\n\r\n\r\n<h6>Part Time Employment:</h6>\r\n\r\n•	Students can work up to 20 hours a week (anywhere) during course time and 40 hours per week full-time during vacation periods if they have been granted a work permit.<br>\r\n•	Average earnings: Casual Jobs are available (A$15-18 per hour) as PT work option<br>\r\n', '2023-10-26', '13:12:04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `country_serve_canada`
--

CREATE TABLE `country_serve_canada` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `text` text NOT NULL,
  `d_date` varchar(20) NOT NULL,
  `d_time` varchar(20) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country_serve_canada`
--

INSERT INTO `country_serve_canada` (`id`, `image`, `text`, `d_date`, `d_time`, `status`) VALUES
(1, '0a913b1e8f63d360ec98a3fa8fe95ac0.jpg', '<h6>Country Overview: </h6>\r\n\r\nCanada offers international students one of the finest choices for studying at world-famous colleges, universities, and institutes of higher learning. Amongst some of the most popular study destinations in Canada are Toronto, Montreal, Mississauga, Alberta, Vancouver, Calgary, etc. Study programs for international students in Canada are designed to offer a wide choice of subjects, including research, enabling students to carve out a brilliant career pathway. The fact that stringent practices involve a high focus on practical and seminar-based education makes it a valuable experience for an enriched life ahead.<br><br>\r\n\r\nColleges, universities, and institutes of higher learning granting undergraduate degrees, post-graduate degrees, diplomas, certificates, PhD generals, and PhD ASA, in Canada are globally recognized and accepted because of the exceptionally and consistently high quality of education imparted. A supportive academic environment and approachable professors make Canada a preferred destination for study. The vibrant and lively classrooms reflect the cultural diversity of the country.<br><br>\r\n\r\nFor international students studying in Canada, it means having the power and understanding to influence the betterment of Canada\'s economy. Hence, the Government of Canada encourages international students to apply to pursue their studies in Canada, with a possibility of immigration. <br><br>\r\n\r\n\r\n<h6>Benefits of studying in Canada:</h6>\r\n\r\n•	It helps you acquire a globally accepted qualification<br>\r\n•	World-class Universities and Colleges<br>\r\n•	Lower Tuition Fees<br>\r\n•	Work while you Study<br>\r\n•	Post-graduate Work Permit<br>\r\n•	A pathway to Canadian Permanent Residence<br>\r\n•	Avail part-time work while studying<br>\r\n•	It is also good for your dependents who can accompany you and work while studying<br>\r\n•	Get an effective interaction with fellow students and appreciate their culture.<br><br>\r\n\r\n<h6>Why Study in Canada:</h6>\r\n\r\n•Well, for starters, Canada offers various options in your Study Program from Undergraduate to Bachelors, from Masters to Post Graduate, and from Diploma-PG to PhD General and PhD ASA. Canada offers a very high standard of living, a very good, affordable lifestyle, access to one of the finest healthcare and social care benefits. You also have access to good quality education for your dependent children who can avail Government subsidized education. As an International Student, there are vast opportunities of exploring and being able to work during your studies within the given working hour’s period (on-campus/Off-campus), as well as being able to work Full-time during your Vacation Periods.<br>\r\n•Perhaps one of the BEST attractive features of being an International Student in Canada is your being eligible to apply for a Canada Permanent Resident Visa for 3 years, after which you’re well on your way to becoming a Canadian Citizen, entitling you to avail all the rights, benefits and privileges enjoyed by other Canadian Citizens.<br>\r\n•Canadians give great importance to learning and have developed a superior education system.<br>\r\n•Canada spends more on education and stands second highest among G-8 countries.<br>\r\n•Canada offers wide choice courses with over 90 universities and 150 colleges offering several unique programmed.<br>\r\n•Most of the universities and college programs incorporate a co-operative work program, giving the students an opportunity to work in their related field and earn credits for the same.<br>\r\n•Students studying in Canada can work twenty hours per week, off campus* during ongoing school sessions and full time during scheduled breaks/vacation.<br>\r\n•Canada is a safe place to study in and has high standards of law and order.<br>\r\n•Canada has an affordable lifestyle with so much to offer.<br>\r\n\r\n<h6>Higher Education in Canada:</h6>\r\n•Higher education in Canada is a key factor in the country\'s economic and social prosperity. As a nation that places a high value on education and research, Canada\'s higher education institutions offer diverse and innovative programs to cater to both domestic and international students. Through continuous investment in the development of faculties, infrastructure, and technological advancements, Canada has become a global leader in higher education. This essay will explore various aspects of higher education in the Canadian context, highlighting its strengths, challenges, and potential for growth.<br>\r\n\r\n<h6>Education System in Canada:</h6>\r\n\r\n•There is no Federal (Central) Education System in Canada as education in Canada is under the complete jurisdiction of the provinces and territories (States). As such, and in keeping with the national commitment to education, public education in Canada is free up to and including secondary school (Class 12 or Higher Secondary Certificate – HSC), in all the provinces. At the post-secondary level, institutions are divided into community colleges and universities.<br>\r\n\r\n•A significant number of university graduates attend college upon completion of their degree in order to acquire vocational skills for employment. Education in Canada is generally divided into primary education, followed by secondary education and post-secondary. Education is compulsory up to the age of 16 in every province in Canada, except for Ontario and New Brunswick, where the compulsory age is 18.<br><br>\r\n\r\n<h6>Levels of Education in Canada’s Education System\r\nOutside Québec</h6>\r\n\r\n<h6>Intermediate Education</h6>\r\n•	Grade 7 (ages 12-13)<br>\r\n•	Grade 8 (ages 13-14)<br>\r\n•	Grade 9 (ages 14-15)<br><br>\r\n\r\n<h6>Secondary Education</h6>\r\n•	Grade 10 (ages 15-16)<br>\r\n•	Grade 11 (ages 16-17)<br>\r\n•	Grade 12 (ages 17-18)<br>\r\n•	Grade 12+ (ages 17+) (Ontario only)<br><br>\r\n\r\n<h6>Tertiary Education (Post-Secondary Education)</h6>\r\n•	Certificates, Diplomas, Associate Degree (Offered in Colleges) <br>\r\n•	Bachelor’s Degree, Master\'s Degree, PhD (Offered in Universities and University College)<br><br>\r\n\r\n<h6>College</h6>\r\n•	Pre-university Program: Two years (typically Social Sciences, Natural Sciences or Arts) Professional Program: Three years (e.g. Paralegal, Dental Hygienist, Nursing, etc.)<br><br>\r\n\r\n<h6>University (Must have a Diploma of College Studies)</h6>\r\n•	Undergraduate: Three of four years leading to a Bachelor’s degree. Non-Québec students require an extra year to complete the same degree because of the extra year in college.<br><br>\r\n\r\n<h6>Graduate (or Postgraduate)</h6>\r\n•	One or two years: Leading to a Master’s Degree.<br>\r\n•	Three or more years: Leading to a Doctoral Degree.<br><br>\r\n\r\n<h6>Student visa options:</h6>\r\n•	Student Direct Stream<br>\r\n\r\n<h6>Study & Living Expenses:</h6>\r\n\r\nTuition Fees (Approx)<br>\r\n•	Diploma & Certificate program: C$ 12,000 to $15,000<br>\r\n•	Bachelors Program: C$ 12,000 to $ 18,000<br>\r\n•	Masters Program: C$ 22,000 to $ 26,000<br><br>\r\n\r\nLiving Expenses: Types of Accommodation (Approx Cost per Month)<br>\r\n•	Residence/Dormitory: C$350 – $515<br>\r\n•	Off-Campus Rental Housing: C$350 – $700 (Shared Apartment)<br>\r\n•	Homestay: C$550 – $800<br><br>\r\n\r\n\r\n<h6>Student Life in Canada:</h6>\r\n\r\nYou would be surprised to know that the International Students community in Canada contributes nearly a whopping $6.5 billion every year boosting Canada’s economy! The number of International Students who have enrolled as full-time students in Canadian universities in 2008-09 crossed the 70,000 + mark. Out of this, 47,000 were enrolled International Students full-time international students were enrolled in undergraduate programs as full-time students. The numbers have since been growing.<br>\r\n\r\n<h6>Finding the right type of accommodation in Canada</h6>\r\n<h6>Home stays (University Provided Accommodation)</h6>\r\nMany Canadian families welcome international students. Home stays are popular because:<br>\r\n•	They offer a more stable and secure environment<br>\r\n•	Consists of a Canadian family hosting a student in their home while the student attends classes in Canada<br>\r\n•	Meals and a private furnished room are provided in the home<br>\r\n•	Host family welcomes and encourages participation in family and community activities.<br>\r\n•	They are arranged by the school and students are matched with families who share similar interests.<br><br>\r\n\r\n<h6>Residence/Dormitory (University Provided Accommodation)</h6>\r\nThese are very popular because:<br>\r\n•	They are very conveniently located on or near the campus<br>\r\n•	Rooms come in varying sizes and in quality<br>\r\n•	Many dormitories have shared kitchens, toilets, showers and laundry facilities making life very comfortable and time-saving<br>\r\n•	Option to choose either a shared or a private room<br>\r\n•	Dormitories are usually separated by gender.<br>\r\n•	In some cases, there are cafeterias and meal plans that can be included in the cost of the room<br>\r\n•	Most dormitories come furnished, and are an ideal way to become involved in campus activities and meet other students.<br><br>\r\n\r\n<h6>Off-Campus Housing</h6>\r\n•	Renting is an option open to International Students coming to Canada. Off-Campus Housing is popular because costs can be kept down. Many schools offer an off-campus housing service which can provide affordable listings near to the campus. Those seeking shared accommodations can also find roommates using the off-campus housing service<br><br>\r\n\r\n<h6>Renting a house</h6>\r\n•	Since renting out a whole house is too expensive for one single International Student, usually many other students (who share similar preferences and habits) join hands to share or rent suites. These suites or houses are self-contained units with a kitchen, toilet, bath and bedroom located within a larger home.<br><br>\r\n\r\n<h6>Apartments</h6>\r\n•Apartments are another option and have a kitchen, toilet, bath, and one or two bedrooms. Most rental apartments do not include furniture or meals. Some, however, include the cost of heat and/or electricity in the rent.<br>\r\n\r\n<h6>Health Insurance in Canada</h6>\r\n•In Canada, a public health care system covers visits to doctors and specialists, as well as some hospital stays and medical procedures. Dental costs, prescription eye glasses, and non-prescription drugs are not covered and can be paid for through the purchase of private insurance coverage. Each province administers its own health care system and the requirements for international students to access health care will vary from province to province.<br>\r\n\r\n•Overall, international students have access to good health services coverage at an affordable cost. Health insurance must be arranged before arrival in Canada. Student can purchase health coverage from a private health insurance company or enroll in a university or college health plan. The health coverage requirements vary from province to province and some provinces provide health coverage plans to international students.<br><br>\r\n\r\n<h6>Application Procedure:</h6>\r\nIntakes:\r\n•The major intake for Canada primarily is in the ‘fall’ Season which means in the month of September every year. So, you should plan your study program accordingly at least one year in advance. Other intake is in the ‘winter’ Season which means in the month of January, every year. However Intakes might also depend on the students program and the institution concerned that the student intends to apply to. There are very few institutes in Canada that offer an Intake in the month of May.<br><br>\r\n\r\n<h6>English Language Requirements:</h6>\r\n•All students should take up the IELTS or TOEFL (ibt) exams.<br>\r\n•An IELTS Band Score of 6.0/6.5 for Undergraduate Courses is required<br>\r\n•An IELTS Band Score of 6.5/7 for Postgraduate Courses is required<br><br>\r\n\r\nAlternatively, International Students may also submit their TOEFL Score Sheets meeting requirements as under:<br>\r\n•TOEFL Score of 80 and above for Undergraduate Courses<br>\r\n•TOEFL Score of 90 and above for Post Graduate Courses.<br>\r\n\r\n<h6>Eligibility:</h6>\r\n•The Eligibility Requirements for the different Levels of Studies are as follows:\r\n\r\n<h6>Advanced Diploma/Diploma/Certificate</h6>\r\n•	Higher Second Class in HSC<br>\r\n•	IELTS/TOEFL (ibt)<br><br>\r\n\r\n\r\n<h6>Bachelors Degree</h6>\r\n•	First Class in HSC<br>\r\n•	IELTS/TOEFL (ibt)<br>\r\n\r\n<h6>Post Graduate Certificate/Diploma</h6>\r\n•	Higher Second Class in Bachelors Degree (3 or 4 years)<br>\r\n•	IELTS/TOEFL (ibt)<br><br>\r\n\r\n<h6>Masters Degree</h6>\r\n•	First Class in Bachelors Degree (4 years only i.e. BS)<br>\r\n•	IELTS/TOEFL (ibt) (OR)<br>\r\n•	First Class in Bachelors Degree (3 years)<br>\r\n•	Post Graduate Certificate/Diploma (from CANADA)<br>\r\n•	IELTS/TOEFL (ibt)<br><br>\r\n\r\n<h6>Visa Guideline:</h6>\r\nIf you wish to study in Canada, you first have to apply for a Study Permit. But before applying, you should have been accepted at a recognized school, university or college in Canada. The Application Fee for a Study Permit is 125 Canadian Dollars.<br><br>\r\n\r\nChecklist of Documents Required to file for your Canada Study Permit<br>\r\n•SET I: Passport, Application Form (2 passport size photographs affixed), Personal Information Form, Student Questionnaire Form, Letter of Acceptance (from Canadian Educational Institutions), Use of a Representative Form (SIEC Education as your Representative), and a Copy of Certificat d’acceptation du Québec – CAQ (for Québec bound students)<br><br>\r\n\r\n•SET II: IELTS / TOEFL score card (taken within last 24 months and overall score not less than 6.0), Copy of most recent degree with mark sheets, and other educational degrees<br>\r\n\r\n•SET III: Financial Documents (Funds to be shown: Tuition + $10,000 as living cost for 12 months or $11,000 as living cost for 12 months in Québec<br>\r\n\r\nProcessing Time for Study Permits: 2 to 6 weeks for receipt of Initial Response, after which students have to submit their Medical Examinations reports.<br>\r\nPossible Grounds on which you’re Visa could be rejected<br>\r\n•	Financial Proof shown insufficient to support yourself during your studies<br>\r\n•	Failure to pass your medical examination<br>\r\n•	You have not satisfied the visa officer that your primary intention in Canada is to study, and that you will leave Canada at the end of your studies.<br>\r\n\r\n<h6>Work Permits for Students:</h6>\r\nStudent Work Permit<br>\r\n•	It is possible for an international student to work in Canada and there are opportunities for jobs on and off campus. From June 2014 students holding study permit will be eligible to work off-campus for up to 20 hours per week during academic session and for full-time during vacations as there will be no need to apply for work permit separately. Course however must be of six month duration or more leading to degree, diploma or certificate at a designated institution<br><br>\r\n\r\n•	We, at SIEC Education take every step to ensure that you get a Student Work Permit that really fulfils the requirement of being a full-time student at a Participating Institution.<br><br>\r\n\r\nFurther useful information<br>\r\nCo-op and Internship Programs:<br>\r\n\r\n•	Gives students education-related work and learning experience that integrates theory learned in the classroom with practical application and skill development on the job.<br>\r\n•	Allows students to work full-time in a field related to their studies<br>\r\n•	Proves to be a valuable system for students to enhance their curriculum as well as fine tune their career path<br>\r\n•	Provides academic credits for the job experience<br>\r\n•	Improves future prospects for students<br><br>\r\n\r\nWork AFTER Graduation under Canada Post-Graduate Work Permit Program:<br>\r\n\r\n•	Allows students who have graduated from a participating Canadian post-secondary institution to gain valuable Canadian work experience<br>\r\n•	Cannot be valid for longer than the student’s study program (For example, if you graduate from a four-year degree program, you could be eligible for a three-year work permit if you meet the criteria).<br>\r\n•	If you graduate from an eight-month certificate program, you would be eligible for a work permit that is valid for no more than eight months only.<br><br>\r\n\r\n<h6>Canada Open Work Permit:</h6>\r\n•	International students are welcome to apply for the Canada Open Work Permit as it has been designed to attract students to study in the various universities across Canada. Only International students who get a Canada Study Permit first will be able to get the Canada Open Work Permit. With a secured Canada Open Work Permit in their hands, students face no restrictions whatsoever on the type of jobs they can do. Also, they are free from the bother of getting any Job Offer Letter from any Employer in Canada.<br><br>\r\n\r\n•	Yet another attractive feature of the Canada Open Work Permit is that it is also applicable to the students’ spouses, common-law partners of temporary overseas professionals, and overseas students who want to work in Canada for a Canadian Employer without the hassles of finding a confirmed Job Offer Letter from an Employer in Canada.<br><br>\r\n\r\n<h6>How do International Students become Eligible to apply under the Canada Open Work Permit?</h6>\r\n•There are some guidelines introduced by Citizenship and Immigration, Canada (CIC)that need to be followed by both International students and their spouses or common law partners for getting their Canada Open Work Permit. These guidelines are mentioned below.<br><br>\r\n\r\n<h6>Foreign Students</h6>\r\n\r\nStudents graduating from a Post-Secondary Institution in Canada:<br><br>\r\n\r\n•	Are eligible to apply for a 3 year Work Permit under the Canada Open Work Permit<br>\r\n•	Do not require a valid Job Offer Letter from any Employer in Canada at the time of submission of their application<br>\r\n•	Must have graduated from a public Post-secondary educational institution or from a private post secondary educational Institution<br>\r\n•	If graduating from a post-secondary educational institution, it should have been 50% funded by the government<br>\r\n•	Must apply for the Canada Open Work Permit within 90 days of receiving the written confirmation from the respective academic/educational institution from where you have met the requirement of the program<br>\r\n•	Must have completed your study and your program should be a of minimum 2 years duration or more than 8 months<br>\r\n•	You need to have a Study Permit for Canada<br>\r\n\r\n<h6>Spouse/Common law partner:</h6>\r\n•As a dependent spouse’s partner in Canada you must be studying a full time diploma/degree or post graduation program with a valid Canadian Study Permit<br>\r\n•You must also be in a valid fellowship program or holder of a valid Work Permit.<br>\r\n', '2023-10-26', '14:25:45', 5);

-- --------------------------------------------------------

--
-- Table structure for table `country_serve_malaysia`
--

CREATE TABLE `country_serve_malaysia` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL,
  `d_date` varchar(20) NOT NULL,
  `d_time` varchar(20) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country_serve_malaysia`
--

INSERT INTO `country_serve_malaysia` (`id`, `text`, `d_date`, `d_time`, `status`) VALUES
(1, '<h3>Complete your Graduate studies abroad 5</h3>\r\n\r\nLooking to venture abroad for your master’s or graduate degree? You need support from start to finish, which is where we come in. TEAN can help with no-cost advice, resources, and application guidance for U.S. and Canadian students. We’ll personally take you through your applications at high-ranking institutions to get you closer to your career dreams and professional goals. Discover the TEAN difference and fill out a form to get more information. Your adventure is waiting!\r\n\r\n<h3>Programs Available 5</h3>\r\n\r\nNo matter your interest or dream career path, we can help you find the best program for your needs. Whether you’re looking for a full master’s degree or a professional degree program, we’ll get you on your way to making those dreams into realities. We make it easy to choose a program that meets your unique needs from dozens of top universities in Australia and New Zealand. Here are some available options, just to name a few.', '2023-10-26', '15:30:08', 1);

-- --------------------------------------------------------

--
-- Table structure for table `country_serve_newzealand`
--

CREATE TABLE `country_serve_newzealand` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `text` text NOT NULL,
  `d_date` varchar(20) NOT NULL,
  `d_time` varchar(20) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country_serve_newzealand`
--

INSERT INTO `country_serve_newzealand` (`id`, `image`, `text`, `d_date`, `d_time`, `status`) VALUES
(1, '644359ae0b7c817e9d32fb9792ba4ebb.jpg', '<h6>Country Overview:</h6>\r\n\r\nNew Zealand is a wonderful education destination for international students. The peace and tranquillity, the scholarly study environment in Colleges and Universities and the wide choice of subjects to choose from the many Undergraduate, Graduate, Post Graduate and Doctoral Programs make New Zealand a student’s haven for acquiring world quality education leading to great career pathways in the future.\r\nNew Zealand is located in the Southwest Pacific Ocean and consists of two main islands as well as a number of smaller ones. The principal islands are the North and South Islands, which are separated by the Cook Strait. North Island has a mountainous center with many hot springs and volcanic peaks. South Island is much more mountainous with the Southern Alps, which has some 350 glaciers running across the length of the island. Much of the lowlands are broken and hilly, while plains are not prominent on either island.<br>\r\n\r\n<h6>Benefits of studying in New Zealand:</h6>\r\n\r\n•	It helps you acquire a globally accepted qualification<br>\r\n•	Points for permanent residency in New Zealand<br>\r\n•	Improvement if English proficiency<br>\r\n•	Avail part-time work while studying<br>\r\n•	After study students can Get Up to 3 years post study work permit according to their Study Level & Location of Institute.<br>\r\n•	It is also good for your dependents who can accompany you and work while studying<br>\r\n•	You will hit upon many job opportunities for availing jobs as well as a permanent residency in New Zealand<br>\r\n•	Get an effective interaction with fellow students and appreciate their culture.<br>\r\n•	New Zealand is free from crime and quite safe in terms of living as compared to other countries<br>\r\n\r\n<h6>Why Study in New Zealand:</h6>\r\n\r\nInternational Students prefer studying in New Zealand for the following reasons:<br><br>\r\n• World class learning institutions and worldwide recognition New Zealand has an international reputation as a provider of quality education. It has a progressive education system with many state of the art facilities. It offers a safe learning environment with excellent study opportunities and support services for international students. New Zealand produces top graduates who can take their place with confidence in the international arena in many disciplines.<br>\r\n• Endless Study Choices Education in New Zealand offers an attractive and stimulating academic environment. The institutions are diverse in size and location, and offer a wide range of general and specialist courses available for academic, professional and vocational studies at New Zealand institutions – universities, polytechnics and institutes of technology, colleges of education, secondary schools and private training establishments.<br>\r\n• Safe place to study and a high quality lifestyle According to Global Peace Index (GPI), New Zealand is rated as one of the most peaceful countries in the world. New Zealand does not have high crime rates. Police in New Zealand don’t carry guns and Friendly country, friendly people New Zealanders are famed for their friendliness, hospitality and warmth to overseas visitors which includes International students.\r\nStable democratic environment<br>\r\n• New Zealand offers a safe and stable democratic political environment than elsewhere. Instances of corruption are virtually unheard of. There is no have abject poverty or hunger, pollution, congestion, health issues and cramped city living.<br>\r\n\r\n<h6>Higher Education in New Zealand:</h6>\r\n\r\n•New Zealand is a country that values education and has a robust system of higher education institutions. These institutions offer a diverse range of programs and courses in fields such as business, engineering, arts, and sciences. Many of the universities in New Zealand are internationally recognized for their academic excellence and research capabilities. Additionally, the country\'s government invests heavily in education, ensuring that these institutions have the resources they need to provide students with a quality education.<br>\r\n\r\n<h6>Education System in New Zealand:</h6>\r\n\r\nEducation System in New Zealand is based on a three-tier model:<br><br>\r\n• Primary Schools<br>\r\n• Secondary Schools and<br>\r\n• Tertiary Education at universities and/or polytechnics.<br>\r\nFor Citizens of New Zealand<br>\r\nThe Government of New Zealand has made education free and compulsory for its citizens who are between the ages of 6 and 16. After this stage, Post-compulsory education is regulated within the New Zealand National Qualifications Framework.<br>\r\n\r\n<h6>The New Zealand National Qualifications Framework (NQF)</h6>\r\n•	NQF is a unified system of national qualifications in schools, vocational education and training institutes located across New Zealand including its provinces.<br>\r\n•	It is made up of nationally endorsed standards and qualifications<br>\r\n•	NQF standards and qualifications are developed by nationally recognized standard setting bodies (SSBs) and quality assured by the New Zealand Qualifications Authority (NZQA)<br>\r\n•	All Qualifications within NQF are divided into levels based on complexity of the skills and knowledge imparted<br>\r\n•	The levels do not equate to ‘years spent learning’ but reflect the content of the qualification.<br>\r\n\r\n<h6>Academic Year in New Zealand</h6>\r\n•	Though the academic year varies from institute to institute, this in general forms the academic year in New Zealand as mentioned below.<br>\r\n•	For Primary Schools, Secondary Schools and Polytechnics: From late January until mid-December<br>\r\n•	For Universities: From late February until mid-November<br>\r\n\r\n<h6>School Education</h6>\r\nMost schools cater for Primary, Intermediate, and Secondary School Students following the age limits mentioned below.<br>\r\n•	Years 1–6: Primary School (Ages 5–10)<br>\r\n•	Years 7–8: Intermediate School (Ages 11–12)<br>\r\n•	Years 9–13: Secondary School (Ages 13–18)<br>\r\n\r\n<h6>Polytechnics and Institutes of Technology</h6>\r\n•	There are 23 government-funded polytechnics and institutes of technology<br>\r\n•	Programs offered in these institutions are designed in such a way that they be both academically and vocationally focused<br>\r\n•	Some institutions offer Year 1 of a Degree Program, with subsequent years being completed at a university.<br>\r\n\r\n\r\n<h6>Private Tertiary and Training Establishments</h6>\r\n•	These institutions offer an alternative study option<br>\r\n•	Range of Programs offered include Professional Certificates, Diplomas and Degrees<br>\r\n•	Diverse range of subjects include: art, hospitality industry, computer studies, secretarial studies, quality management, ecotourism, etc.<br>\r\n\r\n<h6>Student visa options:</h6>\r\n•	Free Paying visa <br>\r\n•	Exchange Student Visa<br>\r\n•	Foreign Government Supported Student visa. <br>\r\n•	Pathway Student Visa<br>\r\n\r\n<h6>Study & Living Expenses:</h6>\r\n•	Annual Tuition Fees<br>\r\n•	Bachelors /Diploma Courses: NZ$20000-NZ$25000 per year<br>\r\n•	Masters Courses: NZ$25125-NZ$30485 per year<br>\r\n•	PhD Courses: NZ$27000 – NZ$35000 per year<br>\r\n•	PhD ASA Courses: NZ$27000 – NZ$35000 per year<br>\r\n•	Living Expenses: Approximately NZ$1250 per month, and depending upon your lifestyle – austere, normal, rich, extravagant or lavish!<br>\r\n\r\n<h6>Student Life in New Zealand:</h6>\r\n•	Accommodation Types<br>\r\n•	In many cases, your accommodation will be only minutes from your place of study. Your institution can help you find accommodation before you begin studying.<br>\r\n•	Halls of residence or student hostels<br>\r\n•	These are usually located on campus or nearby, with single or twin rooms. Bed linen and cleaning are provided. Meals are eaten in a communal dining hall, with special dietary needs catered for. A warden lives on-site and social and sporting activities are organized for residents. Hostels usually have computer labs and recreation rooms. Some institutions provide self-catering hostels where 6 to 8 students have their own bedrooms and share a kitchen and living room.\r\n<br><br>\r\n\r\n•	Home stay or private board<br>\r\n•	This gets you a room in a suburban house, usually with a garden and lawns. Your host family provides meals. Interacting with your host family and meeting their neighbors and friends is an excellent way to improve your English. Your host family will help you adjust to life in New Zealand. Home stay is not like living in a hotel. Some ‘give and take’ is expected, as you become part of the family.<br><br>\r\n\r\n•	Renting a house or apartment<br>\r\n•	Renting a house or flat (apartment) on your own or with other people is called ‘flatting’. You choose your own flat mates in accommodation, ranging from a two-bedroom apartment to a large house on its own land. Most rental properties are unfurnished, apart from an oven, a laundry, curtains and carpet. A bond of up to 4 weeks’ rent is held by Tenancy Services and refunded when you move out, if the flat is still in good condition.<br><br>\r\n\r\n•	Finding a rental<br>\r\n•	The accommodation office at your tertiary institution will probably have a notice board with advertisements for flats. Newspaper classifieds list rental properties, especially on Wednesday and Saturdays. There are also several websites that list rental accommodation throughout New Zealand.<br><br>\r\n\r\n•	Health Care<br>\r\n•	The New Zealand government requires that all international students in New Zealand have an appropriate medical and travel insurance for their entire duration of study in New Zealand. Students need medical insurance to cover all treatments, including doctors, hospitals, ambulance and specialist students. International students can visit the doctor at the student health centre in their institution to get treatment for a very reasonable fee.<br><br>\r\n\r\n•	Dental Care<br>\r\n•	This is not usually included in the Medical Insurance and not provided at the Institution’s Student Health Centre. International Students have to visit private dental care practitioners for dental care problems. It is advisable to take a different insurance that covers Dental Care also to avoid huge cost on Dental Care treatment.<br><br>\r\n\r\n•	No-fault Accident Compensation Scheme<br>\r\n•	New Zealand provides a no-fault personal injury cover to all its citizens and temporary visitors to New Zealand which includes International Students. This special type of insurance is highly popular as it covers medical and dental treatment, prescribed medications, X-rays, and surgery for injuries caused by accidents by anyone at any place. Due to the wide range of help available after injury under this scheme, no one can be sued for personal injury in New Zealand. <br><br>\r\n\r\n<h6>Application Procedure:</h6>\r\n•	Intakes<br>\r\n•	The academic year is from mid / late February to early November of every year. Most universities have 2 semesters with a holiday of 4 weeks in June. It is quite common to see that different universities have different dates in their Intake months. Some universities also offer summer school in the main holiday period. Intakes are also offered in February, and July and sometimes even in September by a few universities.<br>\r\n•	Meeting English Language Requirements<br>\r\n•	All students must be fluent in English language<br>\r\n•	There are many courses available at public and private institutions in New Zealand and elsewhere to assist international students reach the required level of English language competence<br>\r\n•	SIEC Education can recommended waiver of IELTS /TOEFL wherever possible though we strongly suggest that you give your IELTS/TOEFL before applying to the university of your choice in New Zealand and before applying for your New Zealand Student Visa<br>\r\n•	A band score of 6.0 – 6.5 in IELTS for Undergraduate course is needed.<br>\r\n•	A band score of 6.5 – 7.5 in IELTS for Postgraduate courses is needed.<br><br>\r\n\r\n•	Documents Required<br>\r\n•	Resume, Statement of Purpose, Mark-sheets and Certificates of Class X, XII, till Graduation or relevant Degree transcripts in specific cases, Certificates of Extra-curricular activities, passport copy, birth certificate and 2 reference letters from colleges (for students) and 2 reference letters from employers (for working students).<br><br>\r\n\r\n•	The Process<br>\r\n•	The academic year is from mid / late February to early November and most Universities have 2 semesters with a holiday of 4 weeks in June. Each University operates slightly different dates and some also offer summer school in the main holiday period in November to February. Intakes are in February, July and sometimes in September.<br><br>\r\n\r\n<h6>Visa Guideline:</h6>\r\n\r\nThe visa processing time for applications is 21 to 25 days. During this process embassy may contact to ask for any further information if required.<br>\r\n\r\n•	Required Document for visa<br>\r\n•	Appropriate Visa Fee<br>\r\n•	Two passport-sized color photographs.<br>\r\n•	Original Passport<br>\r\n•	Visa Application Forms, Complete & Signed<br>\r\n•	Statement of Purpose – Handwritten and up to the point<br>\r\n•	IELTS/TOEFL Score Card<br>\r\n•	All academic documents (certified true copies – Notary Attested)<br>\r\n•	Evidence of liquid funds and ITR returns<br>\r\n•	Police Clearance Certificate<br>\r\n•	Medicals chest X-ray certificates from the list of Panel Doctors<br>\r\n•	An offer of place from a approved New Zealand education provider<br>\r\n•	An offer of place from a New Zealand education provider that meets the requirements set out at www.immigration.govt.nz/ offer of place, or A Confirmation of Enrolment if you are a student returning to the same provider and studying the same programmed.<br><br>\r\n\r\nEvidence that your tuition fees:<br><br>\r\n\r\n•	Have been paid or are covered by a foreign government loan, or<br>\r\n•	Will be paid by your home country government or<br>\r\n•	Evidence that you are exempt from tuition fees, or<br>\r\n•	You are applying from outside New Zealand, evidence that you/your family have sufficient funds to pay your tuition fees after your visa application is approved in principle.<br><br>\r\n\r\nVisa Application Fees:<br>\r\n•	To find out how much the fee is and where to send your application, use our office and fees finder at www.immigration.govt.nz/fees.<br><br>\r\n\r\nPost-Visa Success: Things to do<br>\r\n•	Upon approval of visa in principle, you must pay 1 yrs fees (if loan is availed, pay from loan a/c), t the university concerned<br>\r\n\r\n•	After sending the Payment receipt to the High Commission, the student’s passport will be stamped and returned back.<br><br>\r\n\r\nEnglish Language Requirement:<br>\r\n•	It is strongly recommended to give IELTS although it is not mandatory.<br>\r\n\r\n<h6>Work Permits for Students:</h6>\r\n•	Employment – during study<br>\r\n•	International students enrolled in a tertiary programmed of study are eligible to work up to 20 hours per week during the academic year<br>\r\n•	Students can work full time (40 hrs) in New Zealand only during the summer holidays<br>\r\n•	Average wage for part time jobs is between NZ$10 – NZ$12 per hour<br>\r\n•	Eligible student’s partner may apply for a work permit too, valid for the duration of the study course.<br>\r\n•	Post Study Work Visa (Employment – after study)<br>\r\n•	This is Graduate Job Search Visa of one year which allows international students who have graduated with NZ qualification to apply for this post study work visa. Upon finding employment during this period student can apply for NZ immigration to have this work visa extended for 2 more years.<br>\r\n•	There is no requirement of job offer for this Graduate Job search visa. Student can apply for this visa within 3 month of completion of study or can take 6 month if have obtained PhD.<br><br>\r\n\r\n•	Multiple Post Study Work Visa<br>\r\n•	After completion of first Post-study work visa (open), if student complete a second or higher qualification which is either a New Zealand bachelor degree or post-graduate qualification for at least one year then there is another opportunity for student to obtain second Post-study work visa (open).<br>\r\n•	To apply for PSW student must have at least NZ$4,200 available to manage living cost in NZ.<br><br>\r\n\r\n•	Minimum Qualification Requirement for PSW of NZ<br>\r\n•	Two qualifications that each require at least one academic year, at level 4 to 6 on the New Zealand Qualification Framework.<br>\r\n•	One year qualification at level 7 on the New Zealand Qualification Framework.<br>\r\n\r\n', '2023-10-26', '14:12:55', 5);

-- --------------------------------------------------------

--
-- Table structure for table `country_serve_sweden`
--

CREATE TABLE `country_serve_sweden` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL,
  `d_date` varchar(20) NOT NULL,
  `d_time` varchar(20) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country_serve_sweden`
--

INSERT INTO `country_serve_sweden` (`id`, `text`, `d_date`, `d_time`, `status`) VALUES
(1, '<h6> Study in Sweden Overview: </h6>\r\n\r\nSweden ranks among the world’s most innovative nations and the Swedish Higher Education System is internationally renowned for its high quality. Sweden is home not only to world ranked universities but also to some of the top multinational companies like IKEA, TetraPak, Volvo, H&M. Let us look into some reasons for considering Sweden as your study abroad destination. <br>\r\n\r\n<h6> Why Study in Sweden? </h6>\r\n1.      Numerous Degree Programs including Well Paid Internships <br>\r\n2.	IELTS waiver possible for Engineering/Technical students. <br>\r\n3.	No requirement of learning Swedish as there are numerous English Taught Programs <br>\r\n4.	International Students have Unlimited Part Time Work Rights <br>\r\n5.	Post Study Work visa is 1 Year <br>\r\n\r\nApart from these a few other Universities in Sweden that you can check out are: <br><br>\r\n1.	Linnaeus University, Kalmar and Växjö <br>\r\n2.	University of Skövde, Skovde <br>\r\n3.	Halmstad University, Halmstad <br>\r\n4.	Jönköping University, Jönköping <br>\r\n5.	Dalarna University, Falun <br>\r\n6.	Kristianstad University, Kristianstad <br>\r\n7.	On Campus in Swedish University of Agricultural Sciences <br>\r\n\r\n<h6>Popular Programs</h6>\r\nHaving read about the popular cities and the Swedish universities let us now have a look at the popular program options for Master’s and Bachelor’s degrees in Sweden. <br>\r\n\r\n<h6> Masters: </h6>\r\n1.	Engineering Management <br>\r\n2.	Industrial Management <br>\r\n3.	International Logistics and Supply Chain Management <br>\r\n4.	Solar Energy Engineering <br>\r\n5.	Renewable Energy Production <br>\r\n6.	Sustainable Management <br>\r\n7.	International Financial Analysis <br>\r\n8.	Mechanical Engineering <br> \r\n9.	Medical Sciences <br> \r\n10.	Business and Management <br> \r\n\r\n<h6> Bachelors:</h6> \r\n1.	Business and Management <br> \r\n2.	Game Design and Graphics <br> \r\n3.	Energy Transition - Sustainability and Leadership <br> \r\n4.	Network Design and Computer Management <br> \r\n5.	Prosthetics and Orthotics <br> \r\n6.	Computer Science <br> \r\n\r\n<h6>Entry Requirements and Tuition Fees</h6>\r\nOnce we narrow down on the city, university and the program option, the next thing to focus on is the entry requirements. <br> \r\n\r\n<h6>Masters </h6>\r\n\r\n<h6>Entry Requirements:</h6>\r\n1.	Completion of 4 years of Bachelors /3-year Bachelor’s + 2 years Master’s degree in relevant study with minimum 65% aggregate. <br>\r\n2.	IELTS- A score of 6.5 required with no band less than 6.0 (Waiver is possible for Engineering students) <br>\r\n3.	GMAT - required for Masters in Business and Management, Entrepreneurship, Accounting and Financial Management <br>\r\n\r\n<h6>Tuition Fees</h6>\r\nBetween SEK 87,000 to SEK 145,000 (INR 750,000 /- to INR 1,200,000/-) per year  <br>\r\n\r\n<h6>Bachelors </h6>\r\n<h6>Entry Requirements:</h6>\r\n1.	Minimum 60% in 12th std. with Mathematics as a mandatory subject <br>\r\n2.	IELTS- 6.0 with no band less than 5.5 (some programs may require higher IELTS of overall 6.5 bands as well) <br>\r\n\r\n<h6>Tuition Fees: </h6>\r\nSEK 100,000 to SEK 130,000 (INR 900,000/- to INR 1,150,000 /-) per year  <br>\r\n\r\n<h6>Cost of Living</h6>\r\nThe next factor to be considered after the tuition fees is the cost of living which gives us a complete picture of the financials to be arranged. The cost of living in Sweden approximately ranges from 8,000 SEK to 10,000 SEK per month.  <br>\r\n\r\n<h6>Intakes and Deadlines</h6>\r\nLet us now have a look at the intakes and the deadlines so that you can start planning the process accordingly. \r\n\r\n<h6>Intakes </h6>\r\nAugust is the major intake to apply for Swedish Universities. January is the minor intake as only 2-3 programs are available. <br>\r\n\r\n<h6>Deadlines</h6>\r\n1.	17th August (Major Intake) <br>\r\n2.	15th January (Minor intake) <br>\r\n\r\n<h6>Checklist for Visa Application:</h6>\r\n1.	Complete Visa Application Form <br>\r\n2.	Fees: Visa Application fee – 100 Euro, Embassy / Biometric fee – 1740BDT (Fees are subject to change anytime with a notice from Swedish Embassy and Immigration service) <br>\r\n1.	Copy of Passport <br>\r\n2.	Passport size photograph <br>\r\n3.	Admission letter <br>\r\n4.	Notarized copy of all academic documents <br>\r\n5.	At least 6 months’ Tuition fee payment confirmation to University (Refund policy applies) <br>\r\n6.	Motivation letter <br>\r\n7.	Bank Statement <br>\r\n8.	Health Insurance (If applicable) <br>\r\n9.	Air tickets booking <br>\r\n10.	Residence permit (D/DF) <br>\r\n\r\n<h6>Applying for Residence Permit</h6>\r\nYou can apply online through migrationsverket. However, if you face any difficulties to apply, don’t need to be worried. Career Paths is here to help you out.<br>\r\n\r\n<h6>Requirements for Residence Permit:</h6>\r\n1.	A valid passport.<br>\r\n2. 	Proof of admission to a program (which requires your physical presence) as a full-time student.<br>\r\n3.	Proof of payment for tuition fees.<br>\r\n4.	Proof of funds that you are able to support yourself during studying in Sweden.<br>\r\n\r\n<h6>Available Scholarships for Sweden Study</h6>\r\nSweden offers a number of scholarships for international students. Scholarships are available at both the undergraduate and postgraduate levels. The scholarships can cover either a full or partial tuition waiver. Some scholarships include a monthly living stipend along with a full tuition fee waiver. These scholarships are typically awarded on the basis of financial need and academic merit. Extra-curricular activities and leadership skills are also important for getting scholarships. Let’s see some of the great scholarships.<br>\r\n\r\n<h6>Scholarships in Sweden for professionals (SI Scholarship)</h6>\r\nThe SI Scholarships for Global Professionals are awarded to highly-qualified individuals with demonstrated leadership potential within their respective fields. This is one of the most prestigious scholarships in the world. In fact, SI Scholarships are highly competitive, and only a limited number of scholarships are awarded each year. And the SI scholarship is only for professionals.<br>\r\n\r\nWhat does it cover? <br>                                                        	\r\n1.	Full tuition fee coverage. The fee is paid directly by SI to your Swedish university at the beginning of each semester.<br>\r\n2.	A monthly SEK 10,000 to cover your living expenses throughout the study period.<br>\r\n3.	Insurance against illness and accident.<br>\r\n4.	Travel Grant, which is worth SEK 15,000 for the entire study period.<br>\r\n5.	Membership of the SI Network for Future Global Professionals (NFGP). The platform will help you grow professionally and build a network while in Sweden.\r\nMost importantly, you will become a member of the SI Alumni Network after your scholarship period has ended. This membership will open the door to unique opportunities for continued networking as well as professional development.<br>\r\n\r\n<h6>University Scholarships</h6>\r\nMost Swedish Universities offer scholarships to International Students. It can be a partial waiver on tuition fees or a full tuition fee waiver, depending on the university. Here are some of the great university scholarships below.<br>\r\n1.	BTH Scholarships<br>\r\n2.	Chalmers University of Technology scholarships<br>\r\n3.	Dalarna University scholarships<br>\r\n4.	Halmstad University scholarships<br>\r\n5.	Jönköping University scholarships<br>\r\n6.	KTH Royal Institute of Technology scholarships<br>\r\n7.	Karlstad University scholarships<br>\r\n8.	Karolinska Institutet scholarships<br>\r\n9.	Kristianstad University scholarships<br>\r\n10.	Linköping University scholarships<br>\r\n11.	Linnaeus University scholarships<br>\r\n12.	Luleå University of Technology scholarships<br>\r\n13.	Lund University scholarships<br>\r\n14.	Malmö University scholarships<br>\r\n\r\n<h6>How to apply for a Swedish Student Visa</h6>\r\nApplying to Study in Sweden is pretty straightforward. You have to follow the right process to get admission to a Swedish university and a residence permit to study and live there. Here is the simple and step-by-step guide below.<br>\r\n\r\n<h6>How to Apply to a Bachelor’s & Master’s in Sweden?</h6>\r\n1.	First, choose a preferred course and university.<br>\r\n2.	Prepare your documents that need to apply.<br>\r\n3.	Prepare your IELTS.<br>\r\n4.	Apply online through the web portal of the University.<br>\r\n5.	Get an offer if you are eligible to study there.<br>\r\n6.	Apply for a student visa to study there.<br>\r\n7.	Book an air ticket and fly to your dream destination.<br>\r\n\r\n<h6>Employment/Work opportunities in Sweden</h6>\r\nSweden is one of the richest countries in Europe. You can easily get a job while studying in Sweden. After your graduation, you will even get more opportunities. Here are the basic rules and regulations on working in Sweden below.<br>\r\n\r\n<h6>Work while studying in Sweden</h6>\r\nInternational students are allowed to do part-time jobs, and there is no restriction on time. You can work more than 20 hours. But it’s better to work full-time during summer vacation. Since you are a student, the study should get the first priority. If you have any dependents, for example, your spouse, then s/he can work full time.<br>\r\n\r\n<h6>Work after graduation in Sweden</h6>\r\nAfter completion of studies in Sweden, International Students can extend their residence permit for up to 12 months. During this time, you can land your dream job in Sweden. Getting a full-time job in Sweden is much easier than in many countries in the world.<br>\r\n\r\n<h6>PR Facilities in Sweden | How to Get PR</h6>\r\n\r\nGetting PR in Sweden after studies is very easy. You just need to follow some simple steps. Here are the basic requirements for getting PR in Sweden below.<br>\r\n1.	You must have a valid passport.<br>\r\n2.	You must get a job offer in Sweden with an average salary of not lower than 13,000 SEK per month.<br>\r\n3.	Your employer will be required to obtain a “union statement”.<br>\r\n4.	You must check that the employer covers the following insurances:<br>\r\n – Health insurance (must cover loss of income, not just cover medical expenses)<br>\r\n – Life insurance<br>\r\n – Occupational Injury insurance<br>\r\n – Pension insurance (only required for people aged 25 or over)<br>\r\nIf you get employment from a certified company, the Migration Agency will process your application within 10 days. Otherwise, it may take around 1 – 6 months to get a work permit.<br>\r\nYou can apply for PR after successfully living in Sweden for 4 years.<br>\r\n', '2023-10-26', '14:47:44', 5);

-- --------------------------------------------------------

--
-- Table structure for table `hire_staff`
--

CREATE TABLE `hire_staff` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `title` text NOT NULL,
  `text` text NOT NULL,
  `d_date` varchar(20) NOT NULL,
  `d_time` varchar(20) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hire_staff`
--

INSERT INTO `hire_staff` (`id`, `image`, `title`, `text`, `d_date`, `d_time`, `status`) VALUES
(1, '17b49d4b1d4a28dfec96232d37229110.jpg', '<h6>Customized Staffing Solutions:</h6> ', 'We understand that every business is different. Our team works closely with you to understand your specific requirements, enabling us to tailor our staffing solutions accordingly.<br>\r\n\r\n<h6>Extensive Talent Pool: </h6>\r\nTap into our vast network of talented professionals across various industries and job roles. We have a diverse pool of candidates, ensuring you have access to candidates with the skills and expertise you need.<br>\r\n\r\n<h6>Thorough Screening Process: </h6>\r\nWe employ a rigorous screening and selection process to ensure that every candidate we recommend meets your standards. Our evaluations include skills assessments, background checks, and in-depth interviews.<br>\r\n\r\n<h6>Industry Expertise: </h6>\r\nOur recruitment specialists possess deep industry knowledge, allowing them to comprehend the unique demands of your sector. Whether you need IT professionals, healthcare experts, finance specialists, or creative talent, we have you covered.<br>\r\n\r\n<h6>Temporary and Permanent Staffing: </h6>\r\nWhether you require temporary staff for specific projects or permanent employees to join your team long-term, we have the flexibility to cater to your staffing needs.<br>\r\n\r\n<h6>Our Services Include:</h6>\r\n\r\n<h6>Temporary Staffing:</h6>\r\nAccess skilled professionals for short-term projects or peak business periods. Our temporary staffing solutions provide you with the flexibility to manage workloads efficiently.<br>\r\n\r\n<h6>Permanent Staffing:</h6> \r\nFind the ideal candidates to fill permanent positions within your organization. We conduct thorough searches and evaluations to match you with candidates who align perfectly with your company culture and requirements.<br>\r\n\r\n<h6>Contract-to-Hire: </h6>\r\nEvaluate a candidate\'s fit within your organization before making a permanent commitment. Our contract-to-hire services allow you to assess the candidate\'s performance and suitability for the role.<br>\r\n\r\n<h6>Specialized Recruitment: </h6>\r\nNeed professionals with niche skills? Our specialized recruitment services focus on sourcing candidates with specific expertise to meet your specialized staffing needs.<br>', '2023-10-25', '12:23:25', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hits_info`
--

CREATE TABLE `hits_info` (
  `id` int(11) NOT NULL,
  `user_ip` varchar(120) NOT NULL,
  `user_agent` text NOT NULL,
  `device` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `total_hits` varchar(50) NOT NULL,
  `d_date` varchar(50) NOT NULL,
  `d_time` varchar(50) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hits_info`
--

INSERT INTO `hits_info` (`id`, `user_ip`, `user_agent`, `device`, `country`, `total_hits`, `d_date`, `d_time`, `status`) VALUES
(1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'mobile', 'not found', '1', '2023-11-30', '20:12:38', 1),
(2, '103.122.90.65', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'mobile', 'not found', '3', '2023-11-30', '21:01:43', 1),
(3, '103.122.90.65', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36', 'mobile', 'not found', '3', '2023-12-01', '11:34:52', 1),
(4, '103.150.167.246', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'mobile', 'not found', '3', '2023-12-02', '15:02:07', 1),
(5, '202.134.14.137', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'mobile', 'not found', '1', '2023-12-04', '16:53:32', 1),
(6, '103.122.90.65', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36', 'mobile', 'not found', '1', '2023-12-07', '15:34:42', 1),
(7, '103.112.54.40', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'mobile', 'not found', '1', '2023-12-10', '19:00:11', 1),
(8, '103.122.90.65', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2023-12-12', '15:10:21', 1),
(9, '103.122.90.65', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'mobile', 'not found', '1', '2023-12-13', '15:56:30', 1),
(10, '27.122.12.120', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'mobile', 'not found', '1', '2023-12-17', '15:38:48', 1),
(11, '103.122.90.65', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'mobile', 'not found', '3', '2023-12-17', '16:46:03', 1),
(12, '103.122.90.65', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'mobile', 'not found', '1', '2023-12-18', '15:27:55', 1),
(13, '173.252.111.5', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 'mobile', 'not found', '1', '2023-12-19', '08:58:25', 1),
(14, '173.252.83.120', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 'mobile', 'not found', '1', '2023-12-19', '08:58:29', 1),
(15, '103.112.54.40', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'mobile', 'not found', '1', '2023-12-19', '18:41:50', 1),
(16, '103.122.90.65', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:120.0) Gecko/20100101 Firefox/120.0', 'mobile', 'not found', '1', '2023-12-19', '19:38:16', 1),
(17, '103.166.187.115', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'mobile', 'not found', '3', '2023-12-19', '20:21:12', 1),
(18, '103.122.90.65', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2023-12-20', '10:19:56', 1),
(19, '173.252.83.11', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 'mobile', 'not found', '1', '2023-12-20', '13:57:29', 1),
(20, '103.189.176.2', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'mobile', 'not found', '1', '2023-12-20', '13:57:52', 1),
(21, '27.122.14.41', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'mobile', 'not found', '1', '2023-12-20', '16:55:57', 1),
(22, '37.111.239.93', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:120.0) Gecko/20100101 Firefox/120.0', 'mobile', 'not found', '1', '2023-12-21', '18:30:49', 1),
(23, '103.122.90.65', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:120.0) Gecko/20100101 Firefox/120.0', 'mobile', 'not found', '6', '2023-12-24', '17:00:54', 1),
(24, '103.4.145.243', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'mobile', 'not found', '5', '2023-12-24', '17:18:22', 1),
(25, '103.122.90.65', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:121.0) Gecko/20100101 Firefox/121.0', 'mobile', 'not found', '1', '2023-12-25', '12:41:21', 1),
(26, '27.122.14.42', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'mobile', 'not found', '1', '2023-12-26', '12:16:30', 1),
(27, '103.4.145.243', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'mobile', 'not found', '3', '2023-12-27', '16:16:03', 1),
(28, '103.122.90.65', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:121.0) Gecko/20100101 Firefox/121.0', 'mobile', 'not found', '1', '2023-12-27', '12:09:02', 1),
(29, '103.189.176.3', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'mobile', 'not found', '1', '2023-12-31', '12:26:04', 1),
(30, '27.122.12.242', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'mobile', 'not found', '1', '2024-01-01', '16:29:39', 1),
(31, '103.122.90.65', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:121.0) Gecko/20100101 Firefox/121.0', 'mobile', 'not found', '1', '2024-01-02', '20:07:34', 1),
(32, '103.122.90.65', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:121.0) Gecko/20100101 Firefox/121.0', 'mobile', 'not found', '2', '2024-01-04', '17:32:00', 1),
(33, '103.150.167.246', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'mobile', 'not found', '1', '2024-01-06', '12:21:49', 1),
(34, '103.150.167.246', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'mobile', 'not found', '1', '2024-01-10', '11:58:14', 1),
(35, '103.122.90.65', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'mobile', 'not found', '1', '2024-01-13', '16:27:09', 1),
(36, '103.122.90.65', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:121.0) Gecko/20100101 Firefox/121.0', 'mobile', 'not found', '2', '2024-01-16', '20:23:16', 1),
(37, '118.179.168.78', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'mobile', 'not found', '1', '2024-01-16', '14:34:18', 1),
(38, '103.122.90.65', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:122.0) Gecko/20100101 Firefox/122.0', 'mobile', 'not found', '3', '2024-01-29', '17:53:27', 1),
(39, '103.122.90.65', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'mobile', 'not found', '3', '2024-01-30', '18:56:34', 1),
(40, '103.150.167.246', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-01-30', '20:35:24', 1),
(41, '103.122.90.65', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:122.0) Gecko/20100101 Firefox/122.0', 'mobile', 'not found', '1', '2024-02-07', '16:07:09', 1),
(42, '103.122.90.65', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-02-08', '11:55:54', 1),
(43, '103.122.90.65', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:122.0) Gecko/20100101 Firefox/122.0', 'mobile', 'not found', '1', '2024-02-13', '12:35:54', 1),
(44, '118.179.168.78', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'mobile', 'not found', '1', '2024-02-19', '11:43:50', 1),
(45, '103.122.90.65', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36', 'mobile', 'not found', '1', '2024-02-19', '12:38:03', 1),
(46, '69.12.94.96', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'mobile', 'not found', '1', '2024-02-22', '10:41:52', 1),
(47, '103.122.90.65', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:122.0) Gecko/20100101 Firefox/122.0', 'mobile', 'not found', '1', '2024-02-22', '21:05:59', 1),
(48, '103.122.90.65', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:123.0) Gecko/20100101 Firefox/123.0', 'mobile', 'not found', '8', '2024-02-27', '19:12:19', 1),
(49, '103.166.187.114', 'Mozilla/5.0 (Linux; Android 9; SAMSUNG SM-J730G) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/23.0 Chrome/115.0.0.0 Mobile Safari/537.36', 'mobile', 'not found', '1', '2024-02-27', '18:00:37', 1),
(50, '103.166.187.115', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36', 'mobile', 'not found', '1', '2024-02-28', '18:38:11', 1),
(51, '103.166.187.115', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36', 'mobile', 'not found', '1', '2024-02-28', '18:38:11', 1),
(52, '103.122.90.65', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'mobile', 'not found', '22', '2024-02-28', '22:38:32', 1),
(53, '103.166.187.114', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36', 'mobile', 'not found', '1', '2024-02-28', '19:03:59', 1),
(54, '17.241.75.248', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_5) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1.1 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-02-28', '21:37:57', 1),
(55, '17.241.219.244', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_5) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1.1 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-02-28', '21:37:57', 1),
(56, '66.249.70.3', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.6167.139 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '1', '2024-02-29', '08:53:36', 1),
(57, '103.205.37.133', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36 Edg/122.0.0.0', 'mobile', 'not found', '1', '2024-02-29', '10:17:40', 1),
(58, '103.122.90.65', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:123.0) Gecko/20100101 Firefox/123.0', 'mobile', 'not found', '1', '2024-02-29', '13:32:27', 1),
(59, '103.122.90.65', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:123.0) Gecko/20100101 Firefox/123.0', 'mobile', 'not found', '1', '2024-02-29', '13:32:27', 1),
(60, '154.202.110.126', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 12.5; rv:114.0) Gecko/20100101 Firefox/114.0', 'mobile', 'not found', '1', '2024-02-29', '21:36:27', 1),
(61, '104.168.132.215', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 12_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'mobile', 'not found', '1', '2024-03-01', '20:56:11', 1),
(62, '66.249.70.2', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; Googlebot/2.1; +http://www.google.com/bot.html) Chrome/121.0.6167.139 Safari/537.36', 'mobile', 'not found', '8', '2024-03-02', '22:05:37', 1),
(63, '103.79.183.162', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'mobile', 'not found', '7', '2024-03-02', '12:27:57', 1),
(64, '103.166.187.114', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'mobile', 'not found', '4', '2024-03-02', '19:50:11', 1),
(65, '69.12.94.88', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-03-02', '12:24:18', 1),
(66, '17.241.75.30', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_5) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1.1 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-03-02', '13:47:14', 1),
(67, '66.249.70.3', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; Googlebot/2.1; +http://www.google.com/bot.html) Chrome/121.0.6167.139 Safari/537.36', 'mobile', 'not found', '3', '2024-03-02', '23:31:52', 1),
(68, '66.249.70.4', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.6167.139 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '2', '2024-03-02', '23:31:52', 1),
(69, '52.167.144.210', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'mobile', 'not found', '1', '2024-03-03', '00:02:06', 1),
(70, '52.167.144.20', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'mobile', 'not found', '1', '2024-03-03', '00:18:58', 1),
(71, '66.249.70.2', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; Googlebot/2.1; +http://www.google.com/bot.html) Chrome/121.0.6167.139 Safari/537.36', 'mobile', 'not found', '1', '2024-03-03', '06:10:46', 1),
(72, '66.249.70.4', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; Googlebot/2.1; +http://www.google.com/bot.html) Chrome/121.0.6167.139 Safari/537.36', 'mobile', 'not found', '1', '2024-03-03', '06:10:46', 1),
(73, '103.137.66.154', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Mobile Safari/537.36', 'mobile', 'not found', '2', '2024-03-03', '09:51:02', 1),
(74, '103.166.187.114', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Mobile Safari/537.36', 'mobile', 'not found', '4', '2024-03-03', '09:53:15', 1),
(75, '31.171.155.3', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.84 Safari/537.36', 'mobile', 'not found', '2', '2024-03-03', '20:04:38', 1),
(76, '114.119.145.115', 'Mozilla/5.0 (Linux; Android 7.0;) AppleWebKit/537.36 (KHTML, like Gecko) Mobile Safari/537.36 (compatible; PetalBot;+https://webmaster.petalsearch.com/site/petalbot)', 'mobile', 'not found', '1', '2024-03-04', '05:26:59', 1),
(77, '66.249.70.3', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; Googlebot/2.1; +http://www.google.com/bot.html) Chrome/121.0.6167.139 Safari/537.36', 'mobile', 'not found', '1', '2024-03-04', '11:19:34', 1),
(78, '66.249.70.4', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; Googlebot/2.1; +http://www.google.com/bot.html) Chrome/121.0.6167.139 Safari/537.36', 'mobile', 'not found', '1', '2024-03-04', '11:19:34', 1),
(79, '52.15.238.255', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36', 'mobile', 'not found', '2', '2024-03-04', '13:25:49', 1),
(80, '15.235.166.170', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.5112.79 Safari/537.36', 'mobile', 'not found', '1', '2024-03-04', '14:07:08', 1),
(81, '15.235.166.170', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.5112.79 Safari/537.36', 'mobile', 'not found', '1', '2024-03-04', '14:07:08', 1),
(82, '1.129.18.68', 'Mozilla/5.0 (iPhone; CPU iPhone OS 17_3_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.3.1 Mobile/15E148 Safari/604.1', 'mobile', 'not found', '1', '2024-03-05', '05:27:19', 1),
(83, '1.129.18.68', 'Mozilla/5.0 (iPhone; CPU iPhone OS 17_3_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.3.1 Mobile/15E148 Safari/604.1', 'mobile', 'not found', '1', '2024-03-05', '05:27:19', 1),
(84, '114.119.128.203', 'Mozilla/5.0 (Linux; Android 7.0;) AppleWebKit/537.36 (KHTML, like Gecko) Mobile Safari/537.36 (compatible; PetalBot;+https://webmaster.petalsearch.com/site/petalbot)', 'mobile', 'not found', '1', '2024-03-05', '05:38:01', 1),
(85, '172.176.75.89', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.134 Safari/537.36', 'mobile', 'not found', '2', '2024-03-05', '09:23:28', 1),
(86, '52.165.149.97', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.54 Safari/537.36', 'mobile', 'not found', '2', '2024-03-05', '09:23:39', 1),
(87, '66.249.70.2', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; Googlebot/2.1; +http://www.google.com/bot.html) Chrome/121.0.6167.139 Safari/537.36', 'mobile', 'not found', '2', '2024-03-05', '10:22:52', 1),
(88, '66.249.70.2', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; Googlebot/2.1; +http://www.google.com/bot.html) Chrome/121.0.6167.139 Safari/537.36', 'mobile', 'not found', '2', '2024-03-05', '10:22:52', 1),
(89, '66.249.70.4', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; Googlebot/2.1; +http://www.google.com/bot.html) Chrome/121.0.6167.139 Safari/537.36', 'mobile', 'not found', '1', '2024-03-05', '10:22:53', 1),
(90, '103.79.183.162', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:123.0) Gecko/20100101 Firefox/123.0', 'mobile', 'not found', '1', '2024-03-05', '15:09:31', 1),
(91, '66.249.70.3', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.6167.139 Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '1', '2024-03-05', '16:08:16', 1),
(92, '207.241.235.54', 'Mozilla/5.0 (compatible; archive.org_bot/3.3.0; +http://pandora.nla.gov.au/crawl.html)', 'mobile', 'not found', '2', '2024-03-06', '05:23:09', 1),
(93, '89.34.79.113', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) HeadlessChrome/106.0.5249.30 Safari/537.36', 'mobile', 'not found', '1', '2024-03-07', '03:12:21', 1),
(94, '89.34.79.113', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) HeadlessChrome/106.0.5249.30 Safari/537.36', 'mobile', 'not found', '1', '2024-03-07', '03:12:21', 1),
(95, '3.27.115.83', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36 Edg/121.0.2088.46', 'mobile', 'not found', '2', '2024-03-07', '11:33:17', 1),
(96, '81.181.56.32', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.170 Safari/537.36 OPR/53.0.2907.99', 'mobile', 'not found', '2', '2024-03-08', '02:16:51', 1),
(97, '66.249.70.3', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; Googlebot/2.1; +http://www.google.com/bot.html) Chrome/122.0.6261.94 Safari/537.36', 'mobile', 'not found', '2', '2024-03-08', '20:47:11', 1),
(98, '66.249.70.2', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; Googlebot/2.1; +http://www.google.com/bot.html) Chrome/122.0.6261.94 Safari/537.36', 'mobile', 'not found', '1', '2024-03-08', '05:51:26', 1),
(99, '20.169.168.224', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.134 Safari/537.36', 'mobile', 'not found', '4', '2024-03-08', '09:07:14', 1),
(100, '101.44.250.72', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'mobile', 'not found', '1', '2024-03-08', '09:35:56', 1),
(101, '69.160.160.59', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) HeadlessChrome/92.0.4515.107 Safari/537.36', 'mobile', 'not found', '2', '2024-03-08', '13:01:01', 1),
(102, '66.249.70.4', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; Googlebot/2.1; +http://www.google.com/bot.html) Chrome/122.0.6261.94 Safari/537.36', 'mobile', 'not found', '3', '2024-03-08', '20:47:10', 1),
(103, '87.249.132.185', 'Mozilla/5.0 (Windows NT 10.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'mobile', 'not found', '2', '2024-03-08', '16:56:37', 1),
(104, '47.156.171.117', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36 Edg/122.0.0.0', 'mobile', 'not found', '2', '2024-03-08', '20:04:03', 1),
(105, '144.217.135.233', 'Mozilla/5.0 (compatible; Dataprovider.com)', 'mobile', 'not found', '2', '2024-03-08', '22:58:19', 1),
(106, '66.249.70.3', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; Googlebot/2.1; +http://www.google.com/bot.html) Chrome/122.0.6261.94 Safari/537.36', 'mobile', 'not found', '1', '2024-03-09', '04:21:54', 1),
(107, '66.249.70.2', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; Googlebot/2.1; +http://www.google.com/bot.html) Chrome/122.0.6261.94 Safari/537.36', 'mobile', 'not found', '2', '2024-03-09', '04:49:49', 1),
(108, '172.225.60.182', 'Mozilla/5.0 (iPhone; CPU iPhone OS 17_4 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Mobile/15E148 Safari/604.1', 'mobile', 'not found', '1', '2024-03-10', '09:08:58', 1),
(109, '172.225.60.182', 'Mozilla/5.0 (iPhone; CPU iPhone OS 17_4 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Mobile/15E148 Safari/604.1', 'mobile', 'not found', '1', '2024-03-10', '09:08:58', 1),
(110, '84.247.115.79', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.106 Safari/537.36 Kinza/4.9.1', 'mobile', 'not found', '2', '2024-03-10', '13:38:07', 1),
(111, '34.138.108.135', 'ZoominfoBot (zoominfobot at zoominfo dot com)', 'mobile', 'not found', '1', '2024-03-10', '17:59:13', 1),
(112, '118.179.168.78', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-03-10', '19:49:54', 1),
(113, '103.79.183.162', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:123.0) Gecko/20100101 Firefox/123.0', 'mobile', 'not found', '4', '2024-03-11', '16:54:05', 1),
(114, '103.79.183.162', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:123.0) Gecko/20100101 Firefox/123.0', 'mobile', 'not found', '4', '2024-03-11', '16:54:05', 1),
(115, '18.116.28.133', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-03-11', '11:41:27', 1),
(116, '118.179.168.78', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'mobile', 'not found', '3', '2024-03-11', '16:45:01', 1),
(117, '49.180.15.22', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_6_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.6 Mobile/15E148 Safari/604.1', 'mobile', 'not found', '1', '2024-03-11', '15:56:53', 1),
(118, '49.180.15.22', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_6_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.6 Mobile/15E148 Safari/604.1', 'mobile', 'not found', '1', '2024-03-11', '15:56:53', 1),
(119, '35.167.245.242', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.36', 'mobile', 'not found', '2', '2024-03-11', '19:13:55', 1),
(120, '138.199.59.163', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.114 Safari/537.36', 'mobile', 'not found', '2', '2024-03-12', '00:52:09', 1),
(121, '52.167.144.24', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'mobile', 'not found', '1', '2024-03-12', '22:43:13', 1),
(122, '103.120.162.161', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'mobile', 'not found', '1', '2024-03-12', '23:00:49', 1),
(123, '40.77.167.24', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'mobile', 'not found', '1', '2024-03-13', '01:19:06', 1),
(124, '207.241.235.54', 'Mozilla/5.0 (compatible; archive.org_bot/3.3.0; +http://pandora.nla.gov.au/crawl.html)', 'mobile', 'not found', '2', '2024-03-13', '04:22:28', 1),
(125, '8.219.59.78', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.69 Safari/537.36', 'mobile', 'not found', '2', '2024-03-13', '07:42:40', 1),
(126, '163.116.205.123', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-03-13', '16:14:11', 1),
(127, '146.70.146.36', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.114 Safari/537.36', 'mobile', 'not found', '2', '2024-03-13', '17:04:45', 1),
(128, '46.29.235.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'mobile', 'not found', '1', '2024-03-14', '01:17:23', 1),
(129, '8.219.66.145', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.69 Safari/537.36', 'mobile', 'not found', '2', '2024-03-15', '02:36:30', 1),
(130, '3.110.204.134', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) HeadlessChrome/121.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-03-16', '09:56:12', 1),
(131, '8.219.66.145', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.69 Safari/537.36', 'mobile', 'not found', '2', '2024-03-16', '11:08:28', 1),
(132, '103.112.54.40', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'mobile', 'not found', '3', '2024-03-16', '13:46:12', 1),
(133, '138.199.36.244', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.106 Safari/537.36 OPR/55.0.2994.44', 'mobile', 'not found', '2', '2024-03-16', '16:36:28', 1),
(134, '66.249.70.3', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.6261.94 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '1', '2024-03-16', '20:54:15', 1),
(135, '66.249.70.2', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.6261.94 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '1', '2024-03-16', '20:54:15', 1),
(136, '20.169.168.224', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Safari/537.36', 'mobile', 'not found', '2', '2024-03-17', '12:01:41', 1),
(137, '66.249.70.3', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; Googlebot/2.1; +http://www.google.com/bot.html) Chrome/122.0.6261.94 Safari/537.36', 'mobile', 'not found', '1', '2024-03-17', '14:36:27', 1),
(138, '66.249.70.4', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; Googlebot/2.1; +http://www.google.com/bot.html) Chrome/122.0.6261.94 Safari/537.36', 'mobile', 'not found', '1', '2024-03-17', '14:36:27', 1),
(139, '161.142.151.137', 'Mozilla/5.0 (iPhone; CPU iPhone OS 17_3_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.3.1 Mobile/15E148 Safari/604.1', 'mobile', 'not found', '2', '2024-03-17', '23:23:27', 1),
(140, '161.142.151.137', 'Mozilla/5.0 (iPhone; CPU iPhone OS 17_3_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.3.1 Mobile/15E148 Safari/604.1', 'mobile', 'not found', '2', '2024-03-17', '23:23:27', 1),
(141, '17.241.75.218', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_5) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1.1 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-03-18', '05:17:39', 1),
(142, '40.77.167.41', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'mobile', 'not found', '1', '2024-03-18', '07:33:01', 1),
(143, '183.171.91.58', 'Mozilla/5.0 (iPhone; CPU iPhone OS 17_2_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.2 Mobile/15E148 Safari/604.1', 'mobile', 'not found', '1', '2024-03-18', '10:22:13', 1),
(144, '183.171.91.58', 'Mozilla/5.0 (iPhone; CPU iPhone OS 17_2_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.2 Mobile/15E148 Safari/604.1', 'mobile', 'not found', '1', '2024-03-18', '10:22:13', 1),
(145, '52.167.144.16', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'mobile', 'not found', '1', '2024-03-18', '10:52:39', 1),
(146, '103.112.54.40', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-03-18', '10:57:15', 1),
(147, '17.241.75.209', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_5) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1.1 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-03-18', '11:24:45', 1),
(148, '8.219.196.178', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.69 Safari/537.36', 'mobile', 'not found', '2', '2024-03-18', '16:00:26', 1),
(149, '40.77.167.67', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'mobile', 'not found', '1', '2024-03-19', '01:00:15', 1),
(150, '103.112.54.40', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-03-19', '10:59:46', 1),
(151, '35.237.44.94', 'ZoominfoBot (zoominfobot at zoominfo dot com)', 'mobile', 'not found', '1', '2024-03-19', '13:18:09', 1),
(152, '8.219.196.178', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.69 Safari/537.36', 'mobile', 'not found', '2', '2024-03-19', '22:17:42', 1),
(153, '35.237.44.94', 'ZoominfoBot (zoominfobot at zoominfo dot com)', 'mobile', 'not found', '1', '2024-03-20', '04:44:01', 1),
(154, '35.243.162.115', 'ZoominfoBot (zoominfobot at zoominfo dot com)', 'mobile', 'not found', '1', '2024-03-20', '08:22:54', 1),
(155, '103.112.54.40', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-03-20', '11:37:56', 1),
(156, '27.147.134.62', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'mobile', 'not found', '1', '2024-03-20', '14:29:13', 1),
(157, '103.166.187.114', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36 Edg/122.0.0.0', 'mobile', 'not found', '2', '2024-03-20', '22:10:25', 1),
(158, '207.46.13.151', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'mobile', 'not found', '1', '2024-03-21', '00:06:36', 1),
(159, '103.166.187.115', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-03-21', '00:22:46', 1),
(160, '111.88.38.216', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-03-21', '08:09:28', 1),
(161, '111.88.40.179', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'mobile', 'not found', '1', '2024-03-21', '08:26:36', 1),
(162, '168.119.68.248', 'Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)', 'mobile', 'not found', '2', '2024-03-21', '13:59:49', 1),
(163, '123.6.49.18', 'Mozilla/5.0 (Linux; Android 8.0; Pixel 2 Build/OPD3.170816.012) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Mobile Safari/537.36', 'mobile', 'not found', '1', '2024-03-22', '03:53:05', 1),
(164, '123.6.49.18', 'Mozilla/5.0 (Linux; Android 8.0; Pixel 2 Build/OPD3.170816.012) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Mobile Safari/537.36', 'mobile', 'not found', '1', '2024-03-22', '03:53:05', 1),
(165, '111.221.54.97', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-03-22', '12:18:45', 1),
(166, '69.12.94.103', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'mobile', 'not found', '3', '2024-03-22', '20:00:11', 1),
(167, '15.235.166.170', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.5112.79 Safari/537.36', 'mobile', 'not found', '1', '2024-03-23', '04:31:16', 1),
(168, '15.235.166.170', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.5112.79 Safari/537.36', 'mobile', 'not found', '1', '2024-03-23', '04:31:16', 1),
(169, '27.115.124.45', 'Mozilla/5.0 (Linux; Android 8.0; Pixel 2 Build/OPD3.170816.012) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Mobile Safari/537.36', 'mobile', 'not found', '1', '2024-03-23', '09:34:57', 1),
(170, '27.115.124.45', 'Mozilla/5.0 (Linux; Android 8.0; Pixel 2 Build/OPD3.170816.012) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Mobile Safari/537.36', 'mobile', 'not found', '1', '2024-03-23', '09:34:57', 1),
(171, '123.6.49.18', 'Mozilla/5.0 (Linux; Android 8.0; Pixel 2 Build/OPD3.170816.012) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Mobile Safari/537.36', 'mobile', 'not found', '1', '2024-03-23', '09:35:42', 1),
(172, '27.115.124.6', 'Mozilla/5.0 (Linux; Android 8.0; Pixel 2 Build/OPD3.170816.012) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Mobile Safari/537.36', 'mobile', 'not found', '1', '2024-03-23', '09:36:16', 1),
(173, '27.115.124.6', 'Mozilla/5.0 (Linux; Android 8.0; Pixel 2 Build/OPD3.170816.012) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Mobile Safari/537.36', 'mobile', 'not found', '1', '2024-03-23', '09:36:16', 1),
(174, '123.6.49.50', 'Mozilla/5.0 (Linux; Android 8.0; Pixel 2 Build/OPD3.170816.012) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Mobile Safari/537.36', 'mobile', 'not found', '1', '2024-03-23', '09:38:10', 1),
(175, '123.6.49.50', 'Mozilla/5.0 (Linux; Android 8.0; Pixel 2 Build/OPD3.170816.012) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Mobile Safari/537.36', 'mobile', 'not found', '1', '2024-03-23', '09:38:10', 1),
(176, '17.241.227.180', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_5) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1.1 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-03-23', '11:59:43', 1),
(177, '69.12.94.119', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-03-24', '15:48:21', 1),
(178, '103.150.167.246', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-03-25', '08:53:45', 1),
(179, '113.211.209.96', 'Mozilla/5.0 (iPhone; CPU iPhone OS 17_3_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.3.1 Mobile/15E148 Safari/604.1', 'mobile', 'not found', '4', '2024-03-25', '12:04:02', 1),
(180, '113.211.209.96', 'Mozilla/5.0 (iPhone; CPU iPhone OS 17_3_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.3.1 Mobile/15E148 Safari/604.1', 'mobile', 'not found', '4', '2024-03-25', '12:04:02', 1),
(181, '114.141.104.111', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-03-26', '05:23:30', 1),
(182, '36.227.151.55', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36 Edg/122.0.0.0', 'mobile', 'not found', '2', '2024-03-26', '07:48:44', 1),
(183, '210.48.222.12', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-03-26', '09:20:56', 1),
(184, '40.77.167.2', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'mobile', 'not found', '1', '2024-03-26', '10:51:01', 1),
(185, '40.77.167.10', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'mobile', 'not found', '1', '2024-03-26', '12:28:20', 1),
(186, '69.12.94.74', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-03-27', '09:32:37', 1),
(187, '66.249.70.4', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.6261.94 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '1', '2024-03-27', '09:58:58', 1),
(188, '66.249.70.2', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.6261.94 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '1', '2024-03-27', '09:58:58', 1),
(189, '159.196.169.181', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Mobile Safari/537.36', 'mobile', 'not found', '10', '2024-03-27', '18:18:59', 1),
(190, '42.191.198.160', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-03-27', '18:14:06', 1),
(191, '3.138.135.205', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-03-27', '21:41:52', 1),
(192, '52.167.144.219', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'mobile', 'not found', '1', '2024-03-28', '01:09:25', 1),
(193, '195.78.54.124', 'Mozilla/5.0 (Windows NT 6.2; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.106 Safari/537.36', 'mobile', 'not found', '2', '2024-03-28', '04:19:30', 1),
(194, '66.249.70.4', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; Googlebot/2.1; +http://www.google.com/bot.html) Chrome/122.0.6261.94 Safari/537.36', 'mobile', 'not found', '1', '2024-03-28', '05:34:15', 1),
(195, '20.169.168.224', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.134 Safari/537.36', 'mobile', 'not found', '2', '2024-03-28', '10:21:57', 1),
(196, '103.150.167.246', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-03-28', '10:42:38', 1),
(197, '69.12.94.124', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-03-28', '11:03:29', 1),
(198, '66.249.70.3', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; Googlebot/2.1; +http://www.google.com/bot.html) Chrome/122.0.6261.94 Safari/537.36', 'mobile', 'not found', '1', '2024-03-28', '17:18:27', 1),
(199, '66.249.70.3', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; Googlebot/2.1; +http://www.google.com/bot.html) Chrome/122.0.6261.94 Safari/537.36', 'mobile', 'not found', '1', '2024-03-28', '17:18:27', 1),
(200, '34.148.69.136', 'ZoominfoBot (zoominfobot at zoominfo dot com)', 'mobile', 'not found', '1', '2024-03-28', '19:37:56', 1),
(201, '176.95.65.253', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-03-28', '22:16:24', 1),
(202, '103.122.90.65', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:124.0) Gecko/20100101 Firefox/124.0', 'mobile', 'not found', '5', '2024-03-28', '22:54:06', 1),
(203, '35.231.133.250', 'ZoominfoBot (zoominfobot at zoominfo dot com)', 'mobile', 'not found', '1', '2024-03-29', '08:56:22', 1),
(204, '34.148.51.135', 'ZoominfoBot (zoominfobot at zoominfo dot com)', 'mobile', 'not found', '1', '2024-03-29', '13:32:00', 1),
(205, '35.185.35.143', 'ZoominfoBot (zoominfobot at zoominfo dot com)', 'mobile', 'not found', '1', '2024-03-29', '18:32:26', 1),
(206, '40.77.167.4', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'mobile', 'not found', '1', '2024-03-29', '23:49:28', 1),
(207, '17.241.219.129', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_5) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1.1 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-03-30', '04:26:16', 1),
(208, '17.22.237.194', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_5) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1.1 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-03-30', '10:57:25', 1),
(209, '17.22.245.149', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_5) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1.1 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-03-30', '10:57:25', 1),
(210, '103.122.90.65', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:124.0) Gecko/20100101 Firefox/124.0', 'mobile', 'not found', '5', '2024-03-30', '18:49:36', 1),
(211, '103.122.90.65', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:124.0) Gecko/20100101 Firefox/124.0', 'mobile', 'not found', '5', '2024-03-30', '18:49:36', 1),
(212, '69.12.94.99', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-03-30', '16:01:32', 1),
(213, '118.179.168.78', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-03-31', '10:06:15', 1),
(214, '27.147.134.62', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'mobile', 'not found', '1', '2024-03-31', '11:06:52', 1),
(215, '15.204.206.70', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-03-31', '11:59:34', 1),
(216, '69.12.94.113', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'mobile', 'not found', '1', '2024-03-31', '13:32:32', 1),
(217, '66.249.70.3', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; Googlebot/2.1; +http://www.google.com/bot.html) Chrome/122.0.6261.94 Safari/537.36', 'mobile', 'not found', '1', '2024-03-31', '15:48:28', 1),
(218, '66.249.70.2', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; Googlebot/2.1; +http://www.google.com/bot.html) Chrome/122.0.6261.94 Safari/537.36', 'mobile', 'not found', '1', '2024-03-31', '15:48:29', 1),
(219, '103.122.90.65', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:124.0) Gecko/20100101 Firefox/124.0', 'mobile', 'not found', '15', '2024-03-31', '22:33:29', 1),
(220, '103.122.90.65', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:124.0) Gecko/20100101 Firefox/124.0', 'mobile', 'not found', '15', '2024-03-31', '22:33:29', 1),
(221, '27.147.134.62', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-04-01', '14:51:05', 1),
(222, '3.147.75.69', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-04-01', '09:28:08', 1),
(223, '69.12.94.99', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-04-01', '17:06:50', 1),
(224, '52.165.149.97', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.54 Safari/537.36', 'mobile', 'not found', '2', '2024-04-02', '19:07:42', 1),
(225, '69.12.94.105', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-04-03', '10:57:39', 1),
(226, '40.77.167.63', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'mobile', 'not found', '1', '2024-04-03', '13:12:04', 1),
(227, '40.77.167.65', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'mobile', 'not found', '1', '2024-04-03', '14:07:24', 1),
(228, '52.167.144.224', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'mobile', 'not found', '1', '2024-04-03', '17:07:21', 1),
(229, '66.249.70.2', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; Googlebot/2.1; +http://www.google.com/bot.html) Chrome/122.0.6261.94 Safari/537.36', 'mobile', 'not found', '1', '2024-04-04', '11:51:20', 1),
(230, '103.122.90.65', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:124.0) Gecko/20100101 Firefox/124.0', 'mobile', 'not found', '1', '2024-04-04', '22:44:53', 1),
(231, '103.122.90.65', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:124.0) Gecko/20100101 Firefox/124.0', 'mobile', 'not found', '1', '2024-04-04', '22:44:53', 1),
(232, '103.122.90.65', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:124.0) Gecko/20100101 Firefox/124.0', 'mobile', 'not found', '2', '2024-04-05', '12:09:42', 1),
(233, '209.251.16.21', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.6167.85 Safari/537.36', 'mobile', 'not found', '2', '2024-04-05', '17:19:31', 1),
(234, '66.249.70.2', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; Googlebot/2.1; +http://www.google.com/bot.html) Chrome/122.0.6261.94 Safari/537.36', 'mobile', 'not found', '1', '2024-04-05', '18:48:23', 1),
(235, '66.249.70.3', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; Googlebot/2.1; +http://www.google.com/bot.html) Chrome/122.0.6261.94 Safari/537.36', 'mobile', 'not found', '1', '2024-04-05', '18:48:23', 1),
(236, '66.249.70.2', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.6261.94 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '1', '2024-04-07', '09:20:40', 1),
(237, '66.249.70.2', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.6261.94 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '1', '2024-04-07', '09:20:40', 1),
(238, '149.56.150.102', 'Mozilla/5.0 (compatible; Dataprovider.com)', 'mobile', 'not found', '2', '2024-04-07', '21:58:49', 1),
(239, '157.55.39.49', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'mobile', 'not found', '1', '2024-04-08', '00:51:41', 1),
(240, '66.249.70.3', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.6261.94 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '2', '2024-04-08', '04:24:30', 1),
(241, '89.149.23.156', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-04-08', '06:50:08', 1),
(242, '66.249.70.4', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; Googlebot/2.1; +http://www.google.com/bot.html) Chrome/122.0.6261.94 Safari/537.36', 'mobile', 'not found', '2', '2024-04-08', '12:04:49', 1),
(243, '18.116.44.117', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-04-08', '12:55:43', 1),
(244, '103.166.187.114', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-04-09', '18:06:47', 1),
(245, '54.186.9.171', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.36', 'mobile', 'not found', '2', '2024-04-09', '23:43:27', 1),
(246, '157.55.39.61', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'mobile', 'not found', '1', '2024-04-11', '08:46:50', 1),
(247, '207.46.13.6', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'mobile', 'not found', '1', '2024-04-11', '09:20:27', 1);
INSERT INTO `hits_info` (`id`, `user_ip`, `user_agent`, `device`, `country`, `total_hits`, `d_date`, `d_time`, `status`) VALUES
(248, '17.22.253.213', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_5) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1.1 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-04-11', '23:24:39', 1),
(249, '17.22.245.50', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_5) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1.1 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-04-11', '23:24:39', 1),
(250, '17.241.75.32', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_5) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1.1 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-04-12', '10:12:54', 1),
(251, '15.235.166.170', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.5112.79 Safari/537.36', 'mobile', 'not found', '2', '2024-04-12', '12:51:22', 1),
(252, '15.204.206.70', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-04-13', '15:40:58', 1),
(253, '52.167.144.181', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'mobile', 'not found', '1', '2024-04-14', '01:25:41', 1),
(254, '52.167.144.167', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'mobile', 'not found', '1', '2024-04-14', '03:59:45', 1),
(255, '198.54.134.147', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; Xbox; Xbox One) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edge/44.18363.8131', 'mobile', 'not found', '1', '2024-04-14', '11:23:01', 1),
(256, '17.241.219.7', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_5) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1.1 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-04-15', '10:17:56', 1),
(257, '69.12.94.85', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'mobile', 'not found', '4', '2024-04-16', '10:04:11', 1),
(258, '147.45.50.5', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 YaBrowser/22.7.0 Yowser/2.5 Safari/537.36', 'mobile', 'not found', '1', '2024-04-16', '11:01:00', 1),
(259, '34.97.31.18', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) HeadlessChrome/92.0.4515.159 Safari/537.36', 'mobile', 'not found', '1', '2024-04-16', '13:24:38', 1),
(260, '34.97.31.18', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) HeadlessChrome/92.0.4515.159 Safari/537.36', 'mobile', 'not found', '1', '2024-04-16', '13:24:38', 1),
(261, '205.169.39.71', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.61 Safari/537.36', 'mobile', 'not found', '4', '2024-04-16', '13:25:28', 1),
(262, '205.169.39.68', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.61 Safari/537.36', 'mobile', 'not found', '4', '2024-04-16', '13:25:28', 1),
(263, '65.154.226.167', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) HeadlessChrome/119.0.6045.199 Safari/537.36', 'mobile', 'not found', '2', '2024-04-16', '13:25:20', 1),
(264, '65.155.30.101', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.5938.132 Safari/537.36', 'mobile', 'not found', '2', '2024-04-16', '13:25:18', 1),
(265, '65.154.226.168', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.5938.132 Safari/537.36', 'mobile', 'not found', '1', '2024-04-16', '13:28:03', 1),
(266, '65.154.226.168', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.5938.132 Safari/537.36', 'mobile', 'not found', '1', '2024-04-16', '13:28:03', 1),
(267, '66.249.70.3', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.6261.94 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '1', '2024-04-16', '16:33:07', 1),
(268, '66.249.70.4', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.6261.94 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '1', '2024-04-16', '16:33:07', 1),
(269, '203.217.130.249', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36 OPR/107.0.0.0', 'mobile', 'not found', '2', '2024-04-16', '17:56:11', 1),
(270, '103.141.2.80', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'mobile', 'not found', '4', '2024-04-16', '21:59:18', 1),
(271, '66.249.70.4', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; Googlebot/2.1; +http://www.google.com/bot.html) Chrome/122.0.6261.94 Safari/537.36', 'mobile', 'not found', '1', '2024-04-17', '10:38:19', 1),
(272, '66.249.70.2', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; Googlebot/2.1; +http://www.google.com/bot.html) Chrome/122.0.6261.94 Safari/537.36', 'mobile', 'not found', '2', '2024-04-17', '23:28:12', 1),
(273, '69.12.94.110', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-04-17', '21:24:54', 1),
(274, '66.249.70.3', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; Googlebot/2.1; +http://www.google.com/bot.html) Chrome/122.0.6261.94 Safari/537.36', 'mobile', 'not found', '1', '2024-04-17', '23:28:13', 1),
(275, '52.167.144.219', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'mobile', 'not found', '1', '2024-04-18', '04:43:03', 1),
(276, '35.237.51.113', 'ZoominfoBot (zoominfobot at zoominfo dot com)', 'mobile', 'not found', '2', '2024-04-18', '06:34:07', 1),
(277, '34.139.146.163', 'ZoominfoBot (zoominfobot at zoominfo dot com)', 'mobile', 'not found', '1', '2024-04-18', '07:25:12', 1),
(278, '114.119.145.225', 'Mozilla/5.0 (Linux; Android 7.0;) AppleWebKit/537.36 (KHTML, like Gecko) Mobile Safari/537.36 (compatible; PetalBot;+https://webmaster.petalsearch.com/site/petalbot)', 'mobile', 'not found', '2', '2024-04-18', '21:16:07', 1),
(279, '212.129.81.113', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Mobile Safari/537.36', 'mobile', 'not found', '2', '2024-04-18', '14:31:18', 1),
(280, '92.251.254.4', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-04-18', '14:40:46', 1),
(281, '89.101.5.22', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'mobile', 'not found', '4', '2024-04-18', '20:28:23', 1),
(282, '64.43.50.189', 'Mozilla/5.0 (iPhone; CPU iPhone OS 17_4_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4.1 Mobile/15E148 Safari/604.1', 'mobile', 'not found', '1', '2024-04-18', '14:53:43', 1),
(283, '64.43.50.189', 'Mozilla/5.0 (iPhone; CPU iPhone OS 17_4_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4.1 Mobile/15E148 Safari/604.1', 'mobile', 'not found', '1', '2024-04-18', '14:53:43', 1),
(284, '27.147.134.62', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-04-18', '15:19:28', 1),
(285, '101.118.234.186', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-04-18', '16:14:05', 1),
(286, '72.35.49.84', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'mobile', 'not found', '8', '2024-04-18', '20:00:50', 1),
(287, '17.241.75.15', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_5) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1.1 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-04-18', '21:45:36', 1),
(288, '17.241.219.211', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_5) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1.1 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-04-18', '21:45:36', 1),
(289, '52.167.144.181', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'mobile', 'not found', '1', '2024-04-19', '01:49:43', 1),
(290, '34.23.150.167', 'ZoominfoBot (zoominfobot at zoominfo dot com)', 'mobile', 'not found', '1', '2024-04-19', '13:06:08', 1),
(291, '17.22.253.29', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_5) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1.1 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-04-19', '18:31:50', 1),
(292, '17.22.253.123', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_5) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1.1 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-04-19', '18:31:50', 1),
(293, '204.44.112.51', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-04-19', '19:56:03', 1),
(294, '17.22.237.204', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_5) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1.1 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-04-19', '21:29:18', 1),
(295, '35.237.237.245', 'ZoominfoBot (zoominfobot at zoominfo dot com)', 'mobile', 'not found', '1', '2024-04-20', '02:55:48', 1),
(296, '35.243.133.195', 'ZoominfoBot (zoominfobot at zoominfo dot com)', 'mobile', 'not found', '1', '2024-04-20', '08:41:17', 1),
(297, '69.12.94.106', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'mobile', 'not found', '4', '2024-04-20', '21:51:04', 1),
(298, '17.241.227.165', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_5) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1.1 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-04-20', '20:55:48', 1),
(299, '66.249.70.2', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; Googlebot/2.1; +http://www.google.com/bot.html) Chrome/122.0.6261.94 Safari/537.36', 'mobile', 'not found', '2', '2024-04-21', '15:11:07', 1),
(300, '66.249.70.3', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; Googlebot/2.1; +http://www.google.com/bot.html) Chrome/122.0.6261.94 Safari/537.36', 'mobile', 'not found', '1', '2024-04-21', '01:47:12', 1),
(301, '66.249.70.4', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; Googlebot/2.1; +http://www.google.com/bot.html) Chrome/122.0.6261.94 Safari/537.36', 'mobile', 'not found', '1', '2024-04-21', '15:11:07', 1),
(302, '27.125.153.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-04-21', '18:13:39', 1),
(303, '17.241.75.168', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_5) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1.1 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-04-21', '21:13:43', 1),
(304, '52.167.144.235', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'mobile', 'not found', '1', '2024-04-22', '01:59:44', 1),
(305, '52.167.144.19', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'mobile', 'not found', '1', '2024-04-22', '03:56:55', 1),
(306, '52.167.144.219', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'mobile', 'not found', '1', '2024-04-22', '04:59:04', 1),
(307, '52.167.144.203', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'mobile', 'not found', '1', '2024-04-22', '05:51:10', 1),
(308, '203.202.240.244', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'mobile', 'not found', '47', '2024-04-22', '15:55:57', 1),
(309, '17.22.253.78', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_5) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1.1 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-04-22', '18:36:54', 1),
(310, '17.241.227.19', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_5) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1.1 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-04-22', '21:42:54', 1),
(311, '17.22.253.66', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_5) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1.1 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-04-23', '00:31:11', 1),
(312, '69.12.94.101', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-04-23', '08:05:51', 1),
(313, '34.75.137.160', 'ZoominfoBot (zoominfobot at zoominfo dot com)', 'mobile', 'not found', '1', '2024-04-23', '08:50:52', 1),
(314, '35.231.229.77', 'ZoominfoBot (zoominfobot at zoominfo dot com)', 'mobile', 'not found', '1', '2024-04-23', '10:56:48', 1),
(315, '203.202.240.244', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:125.0) Gecko/20100101 Firefox/125.0', 'mobile', 'not found', '1', '2024-04-23', '12:56:08', 1),
(316, '17.241.227.13', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_5) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1.1 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-04-23', '13:52:43', 1),
(317, '209.170.91.202', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.75 Safari/537.36', 'mobile', 'not found', '1', '2024-04-23', '16:39:34', 1),
(318, '209.170.91.202', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.75 Safari/537.36', 'mobile', 'not found', '1', '2024-04-23', '16:39:34', 1),
(319, '17.246.19.214', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_5) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1.1 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-04-23', '21:37:38', 1),
(320, '114.119.145.115', 'Mozilla/5.0 (Linux; Android 7.0;) AppleWebKit/537.36 (KHTML, like Gecko) Mobile Safari/537.36 (compatible; PetalBot;+https://webmaster.petalsearch.com/site/petalbot)', 'mobile', 'not found', '1', '2024-04-24', '00:50:10', 1),
(321, '168.119.68.248', 'Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)', 'mobile', 'not found', '2', '2024-04-24', '11:08:40', 1),
(322, '69.12.94.108', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-04-24', '16:11:48', 1),
(323, '17.22.237.52', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_5) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1.1 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-04-24', '21:07:01', 1),
(324, '17.22.245.254', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_5) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1.1 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-04-24', '21:07:01', 1),
(325, '123.200.15.58', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-04-24', '23:11:56', 1),
(326, '17.246.19.234', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_5) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1.1 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-04-25', '20:31:25', 1),
(327, '17.246.23.219', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_5) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1.1 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-04-26', '08:03:21', 1),
(328, '66.249.77.97', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.6261.94 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '1', '2024-04-26', '18:52:12', 1),
(329, '66.249.77.98', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.6261.94 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '3', '2024-04-26', '19:19:49', 1),
(330, '175.44.42.230', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_6 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.6 Mobile/15E148 Safari/604.1', 'mobile', 'not found', '2', '2024-04-27', '08:51:21', 1),
(331, '69.12.94.72', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-04-27', '09:17:02', 1),
(332, '114.119.128.203', 'Mozilla/5.0 (Linux; Android 7.0;) AppleWebKit/537.36 (KHTML, like Gecko) Mobile Safari/537.36 (compatible; PetalBot;+https://webmaster.petalsearch.com/site/petalbot)', 'mobile', 'not found', '1', '2024-04-27', '15:59:26', 1),
(333, '52.167.144.235', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'mobile', 'not found', '1', '2024-04-28', '00:54:32', 1),
(334, '66.249.65.106', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; Googlebot/2.1; +http://www.google.com/bot.html) Chrome/122.0.6261.94 Safari/537.36', 'mobile', 'not found', '1', '2024-04-28', '04:05:15', 1),
(335, '66.249.65.107', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; Googlebot/2.1; +http://www.google.com/bot.html) Chrome/122.0.6261.94 Safari/537.36', 'mobile', 'not found', '1', '2024-04-28', '04:05:17', 1),
(336, '113.210.106.247', 'Mozilla/5.0 (iPhone; CPU iPhone OS 17_3_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.3.1 Mobile/15E148 Safari/604.1', 'mobile', 'not found', '1', '2024-04-28', '08:39:10', 1),
(337, '113.210.106.247', 'Mozilla/5.0 (iPhone; CPU iPhone OS 17_3_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.3.1 Mobile/15E148 Safari/604.1', 'mobile', 'not found', '1', '2024-04-28', '08:39:10', 1),
(338, '34.148.126.124', 'ZoominfoBot (zoominfobot at zoominfo dot com)', 'mobile', 'not found', '1', '2024-04-29', '02:02:21', 1),
(339, '35.196.21.185', 'ZoominfoBot (zoominfobot at zoominfo dot com)', 'mobile', 'not found', '1', '2024-04-29', '07:31:43', 1),
(340, '203.217.131.145', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4.1 Safari/605.1.15', 'mobile', 'not found', '1', '2024-04-29', '08:33:16', 1),
(341, '203.217.131.145', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4.1 Safari/605.1.15', 'mobile', 'not found', '1', '2024-04-29', '08:33:16', 1),
(342, '17.241.75.185', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_5) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1.1 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-04-29', '10:35:21', 1),
(343, '34.74.103.142', 'ZoominfoBot (zoominfobot at zoominfo dot com)', 'mobile', 'not found', '1', '2024-04-29', '10:43:19', 1),
(344, '17.246.23.34', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_5) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1.1 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-04-29', '15:10:33', 1),
(345, '17.246.19.74', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_5) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1.1 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-04-29', '15:10:34', 1),
(346, '35.237.63.143', 'ZoominfoBot (zoominfobot at zoominfo dot com)', 'mobile', 'not found', '1', '2024-04-29', '18:44:17', 1),
(347, '40.77.167.254', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'mobile', 'not found', '1', '2024-04-29', '22:05:43', 1),
(348, '114.119.135.120', 'Mozilla/5.0 (Linux; Android 7.0;) AppleWebKit/537.36 (KHTML, like Gecko) Mobile Safari/537.36 (compatible; PetalBot;+https://webmaster.petalsearch.com/site/petalbot)', 'mobile', 'not found', '1', '2024-04-29', '22:40:14', 1),
(349, '52.167.144.145', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'mobile', 'not found', '1', '2024-04-30', '03:50:00', 1),
(350, '52.167.144.233', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'mobile', 'not found', '1', '2024-04-30', '06:20:38', 1),
(351, '37.111.213.54', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-04-30', '12:54:39', 1),
(352, '103.96.104.61', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Mobile Safari/537.36', 'mobile', 'not found', '4', '2024-04-30', '12:56:56', 1),
(353, '103.181.69.16', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-04-30', '13:22:43', 1),
(354, '34.139.176.47', 'ZoominfoBot (zoominfobot at zoominfo dot com)', 'mobile', 'not found', '1', '2024-04-30', '13:35:29', 1),
(355, '35.243.196.149', 'ZoominfoBot (zoominfobot at zoominfo dot com)', 'mobile', 'not found', '1', '2024-04-30', '14:43:23', 1),
(356, '103.181.69.16', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Mobile Safari/537.36', 'mobile', 'not found', '2', '2024-05-01', '02:25:39', 1),
(357, '113.23.202.21', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36 Edg/124.0.0.0', 'mobile', 'not found', '2', '2024-05-01', '13:17:41', 1),
(358, '103.178.221.160', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-05-01', '22:16:54', 1),
(359, '17.246.15.179', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_5) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1.1 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-02', '01:19:48', 1),
(360, '17.246.19.169', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_5) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1.1 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-02', '01:19:48', 1),
(361, '157.55.39.15', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'mobile', 'not found', '1', '2024-05-02', '12:55:49', 1),
(362, '17.241.75.42', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_5) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1.1 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-02', '22:51:51', 1),
(363, '17.241.219.165', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_5) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1.1 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-02', '22:51:51', 1),
(364, '114.119.154.65', 'Mozilla/5.0 (Linux; Android 7.0;) AppleWebKit/537.36 (KHTML, like Gecko) Mobile Safari/537.36 (compatible; PetalBot;+https://webmaster.petalsearch.com/site/petalbot)', 'mobile', 'not found', '1', '2024-05-03', '05:00:52', 1),
(365, '17.22.253.128', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_5) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1.1 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-03', '18:37:53', 1),
(366, '17.22.245.29', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_5) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1.1 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-03', '18:37:53', 1),
(367, '17.241.219.219', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_5) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1.1 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-03', '22:53:34', 1),
(368, '17.22.237.144', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_5) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1.1 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-03', '23:08:17', 1),
(369, '209.97.145.196', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.104 Safari/537.36', 'mobile', 'not found', '1', '2024-05-04', '03:06:45', 1),
(370, '159.203.121.147', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.104 Safari/537.36', 'mobile', 'not found', '2', '2024-05-04', '03:08:45', 1),
(371, '209.97.149.192', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.104 Safari/537.36', 'mobile', 'not found', '1', '2024-05-04', '03:09:11', 1),
(372, '66.249.70.199', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.6367.118 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '1', '2024-05-04', '10:38:20', 1),
(373, '37.19.223.5', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-05-04', '20:02:03', 1),
(374, '17.246.15.178', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_5) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1.1 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-04', '23:25:10', 1),
(375, '17.246.19.60', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_5) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1.1 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-04', '23:25:10', 1),
(376, '154.202.127.189', 'Mozilla/5.0 (Windows NT 10.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'mobile', 'not found', '1', '2024-05-05', '01:47:39', 1),
(377, '54.203.189.131', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.36', 'mobile', 'not found', '2', '2024-05-05', '06:24:03', 1),
(378, '114.119.128.244', 'Mozilla/5.0 (Linux; Android 7.0;) AppleWebKit/537.36 (KHTML, like Gecko) Mobile Safari/537.36 (compatible; PetalBot;+https://webmaster.petalsearch.com/site/petalbot)', 'mobile', 'not found', '1', '2024-05-05', '07:01:46', 1),
(379, '114.119.166.95', 'Mozilla/5.0 (Linux; Android 7.0;) AppleWebKit/537.36 (KHTML, like Gecko) Mobile Safari/537.36 (compatible; PetalBot;+https://webmaster.petalsearch.com/site/petalbot)', 'mobile', 'not found', '1', '2024-05-05', '23:50:16', 1),
(380, '17.241.219.227', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_5) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1.1 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-06', '00:57:26', 1),
(381, '17.241.75.144', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_5) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1.1 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-06', '00:57:26', 1),
(382, '52.167.144.139', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'mobile', 'not found', '1', '2024-05-06', '01:05:16', 1),
(383, '86.106.74.245', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Iron Safari/537.36', 'mobile', 'not found', '2', '2024-05-06', '01:59:55', 1),
(384, '27.147.134.62', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-05-06', '12:26:09', 1),
(385, '17.22.245.66', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_5) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1.1 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-06', '18:05:41', 1),
(386, '17.22.237.237', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_5) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1.1 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-06', '18:05:41', 1),
(387, '17.22.253.175', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-06', '23:37:19', 1),
(388, '115.135.27.133', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'mobile', 'not found', '7', '2024-05-07', '09:19:26', 1),
(389, '65.154.226.168', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.5938.132 Safari/537.36', 'mobile', 'not found', '1', '2024-05-07', '14:10:33', 1),
(390, '65.154.226.168', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.5938.132 Safari/537.36', 'mobile', 'not found', '1', '2024-05-07', '14:10:33', 1),
(391, '95.181.232.139', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-05-07', '14:33:49', 1),
(392, '161.142.150.116', 'Mozilla/5.0 (iPhone; CPU iPhone OS 17_4_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4.1 Mobile/15E148 Safari/604.1', 'mobile', 'not found', '1', '2024-05-07', '14:35:34', 1),
(393, '161.142.150.116', 'Mozilla/5.0 (iPhone; CPU iPhone OS 17_4_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4.1 Mobile/15E148 Safari/604.1', 'mobile', 'not found', '1', '2024-05-07', '14:35:34', 1),
(394, '31.13.115.118', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'mobile', 'not found', '1', '2024-05-07', '21:38:33', 1),
(395, '31.13.115.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'mobile', 'not found', '1', '2024-05-07', '21:38:33', 1),
(396, '173.252.127.12', 'Mozilla/5.0 (iPhone; CPU iPhone OS 17_1_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/21B101 [FBAN/FBIOS;FBAV/461.0.3.32.103;FBBV/591474467;FBDV/iPhone14,5;FBMD/iPhone;FBSN/iOS;FBSV/17.1.2;FBSS/3;FBID/phone;FBLC/en_US;FBOP/5;FBRV/596348548]', 'mobile', 'not found', '2', '2024-05-07', '21:39:05', 1),
(397, '31.13.115.6', 'Mozilla/5.0 (Linux; Android 14; SM-A546B Build/UP1A.231005.007; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/124.0.6367.108 Mobile Safari/537.36 [FB_IAB/FB4A;FBAV/462.0.0.47.85;]', 'mobile', 'not found', '3', '2024-05-07', '21:39:49', 1),
(398, '31.13.115.4', 'Mozilla/5.0 (Linux; Android 12; moto g(60) Build/S2RI32.32-20-9-9-2; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/124.0.6367.108 Mobile Safari/537.36 [FB_IAB/FB4A;FBAV/462.0.0.47.85;]', 'mobile', 'not found', '1', '2024-05-07', '21:39:50', 1),
(399, '17.22.253.159', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-08', '00:20:52', 1),
(400, '17.22.245.52', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-08', '00:20:52', 1),
(401, '40.77.167.36', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'mobile', 'not found', '1', '2024-05-08', '04:02:37', 1),
(402, '40.77.167.32', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'mobile', 'not found', '1', '2024-05-08', '04:26:46', 1),
(403, '107.178.207.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-05-08', '12:18:01', 1),
(404, '107.178.207.25', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-05-08', '12:18:04', 1),
(405, '103.120.200.243', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Mobile Safari/537.36', 'mobile', 'not found', '2', '2024-05-08', '18:06:01', 1),
(406, '17.246.23.245', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-09', '00:09:29', 1),
(407, '17.246.19.33', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-09', '00:09:29', 1),
(408, '34.73.184.213', 'ZoominfoBot (zoominfobot at zoominfo dot com)', 'mobile', 'not found', '1', '2024-05-09', '03:05:05', 1),
(409, '66.249.70.2', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; Googlebot/2.1; +http://www.google.com/bot.html) Chrome/122.0.6261.94 Safari/537.36', 'mobile', 'not found', '2', '2024-05-09', '03:25:52', 1),
(410, '35.196.251.242', 'ZoominfoBot (zoominfobot at zoominfo dot com)', 'mobile', 'not found', '1', '2024-05-09', '06:31:48', 1),
(411, '116.68.205.75', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-05-09', '12:23:54', 1),
(412, '210.186.71.152', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-05-09', '13:47:16', 1),
(413, '114.119.128.244', 'Mozilla/5.0 (Linux; Android 7.0;) AppleWebKit/537.36 (KHTML, like Gecko) Mobile Safari/537.36 (compatible; PetalBot;+https://webmaster.petalsearch.com/site/petalbot)', 'mobile', 'not found', '1', '2024-05-09', '21:59:42', 1),
(414, '17.241.219.223', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-09', '22:57:57', 1),
(415, '17.241.219.131', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-09', '22:57:57', 1),
(416, '149.56.150.117', 'Mozilla/5.0 (compatible; Dataprovider.com)', 'mobile', 'not found', '2', '2024-05-10', '01:17:21', 1),
(417, '66.249.70.3', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; Googlebot/2.1; +http://www.google.com/bot.html) Chrome/124.0.6367.118 Safari/537.36', 'mobile', 'not found', '4', '2024-05-10', '16:19:32', 1),
(418, '66.249.70.4', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; Googlebot/2.1; +http://www.google.com/bot.html) Chrome/124.0.6367.118 Safari/537.36', 'mobile', 'not found', '1', '2024-05-10', '12:14:13', 1),
(419, '149.34.252.61', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 YaBrowser/22.7.0 Yowser/2.5 Safari/537.36', 'mobile', 'not found', '1', '2024-05-10', '12:35:54', 1),
(420, '66.249.70.2', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; Googlebot/2.1; +http://www.google.com/bot.html) Chrome/124.0.6367.118 Safari/537.36', 'mobile', 'not found', '2', '2024-05-10', '14:53:51', 1),
(421, '17.22.245.28', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-10', '18:36:57', 1),
(422, '17.22.245.164', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-10', '18:36:57', 1),
(423, '17.22.237.170', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-11', '00:15:11', 1),
(424, '17.22.253.89', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-11', '00:15:11', 1),
(425, '66.249.70.4', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; Googlebot/2.1; +http://www.google.com/bot.html) Chrome/124.0.6367.118 Safari/537.36', 'mobile', 'not found', '1', '2024-05-11', '09:14:30', 1),
(426, '66.249.70.4', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; Googlebot/2.1; +http://www.google.com/bot.html) Chrome/124.0.6367.118 Safari/537.36', 'mobile', 'not found', '1', '2024-05-11', '09:14:30', 1),
(427, '159.196.170.249', 'Mozilla/5.0 (iPhone; CPU iPhone OS 17_4 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) GSA/315.0.630091404 Mobile/15E148 Safari/604.1', 'mobile', 'not found', '1', '2024-05-11', '09:31:28', 1),
(428, '159.196.170.249', 'Mozilla/5.0 (iPhone; CPU iPhone OS 17_4 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) GSA/315.0.630091404 Mobile/15E148 Safari/604.1', 'mobile', 'not found', '1', '2024-05-11', '09:31:28', 1),
(429, '17.241.219.197', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-11', '10:38:37', 1),
(430, '17.246.19.241', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-11', '16:53:09', 1),
(431, '17.246.19.123', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-11', '16:53:09', 1),
(432, '103.67.158.90', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Mobile Safari/537.36', 'mobile', 'not found', '2', '2024-05-11', '18:17:22', 1),
(433, '103.146.42.17', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Mobile Safari/537.36', 'mobile', 'not found', '2', '2024-05-11', '21:43:20', 1),
(434, '119.30.47.19', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Mobile Safari/537.36', 'mobile', 'not found', '3', '2024-05-11', '21:44:58', 1),
(435, '103.138.31.177', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Mobile Safari/537.36', 'mobile', 'not found', '2', '2024-05-11', '22:02:11', 1),
(436, '17.22.253.78', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-11', '22:56:49', 1),
(437, '17.22.237.79', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-11', '22:56:49', 1),
(438, '103.197.153.48', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Mobile Safari/537.36', 'mobile', 'not found', '2', '2024-05-11', '22:57:14', 1),
(439, '202.181.16.72', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Mobile Safari/537.36', 'mobile', 'not found', '2', '2024-05-11', '23:04:26', 1),
(440, '175.41.44.6', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-05-11', '23:16:23', 1),
(441, '103.197.153.48', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Mobile Safari/537.36', 'mobile', 'not found', '2', '2024-05-12', '00:07:35', 1),
(442, '52.165.149.97', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.67 Safari/537.36', 'mobile', 'not found', '2', '2024-05-12', '09:28:59', 1),
(443, '17.241.227.180', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-12', '12:02:26', 1),
(444, '17.241.227.104', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-12', '12:02:26', 1),
(445, '69.12.94.116', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'mobile', 'not found', '3', '2024-05-12', '16:37:36', 1),
(446, '8.219.66.145', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.69 Safari/537.36', 'mobile', 'not found', '1', '2024-05-12', '12:27:53', 1),
(447, '114.119.145.225', 'Mozilla/5.0 (Linux; Android 7.0;) AppleWebKit/537.36 (KHTML, like Gecko) Mobile Safari/537.36 (compatible; PetalBot;+https://webmaster.petalsearch.com/site/petalbot)', 'mobile', 'not found', '1', '2024-05-12', '16:11:42', 1),
(448, '17.246.19.147', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-12', '23:50:17', 1),
(449, '17.246.15.54', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-12', '23:50:17', 1),
(450, '20.169.168.224', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.134 Safari/537.36', 'mobile', 'not found', '2', '2024-05-13', '06:55:38', 1),
(451, '17.241.219.112', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-13', '15:23:04', 1),
(452, '17.241.75.225', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-13', '15:23:04', 1),
(453, '103.55.145.174', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Mobile Safari/537.36', 'mobile', 'not found', '2', '2024-05-13', '23:00:27', 1),
(454, '52.167.144.203', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'mobile', 'not found', '1', '2024-05-14', '01:08:15', 1),
(455, '17.22.245.84', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-14', '02:19:59', 1),
(456, '17.22.245.235', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-14', '02:19:59', 1),
(457, '17.22.253.29', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-14', '23:40:41', 1),
(458, '17.22.245.160', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-14', '23:40:41', 1),
(459, '114.119.135.120', 'Mozilla/5.0 (Linux; Android 7.0;) AppleWebKit/537.36 (KHTML, like Gecko) Mobile Safari/537.36 (compatible; PetalBot;+https://webmaster.petalsearch.com/site/petalbot)', 'mobile', 'not found', '1', '2024-05-15', '06:09:01', 1),
(460, '20.169.168.224', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.63 Safari/537.36', 'mobile', 'not found', '2', '2024-05-15', '09:34:12', 1),
(461, '172.176.75.89', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.127 Safari/537.36', 'mobile', 'not found', '2', '2024-05-15', '09:34:43', 1),
(462, '17.241.75.211', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-15', '10:46:05', 1),
(463, '46.183.221.14', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/111.0', 'mobile', 'not found', '1', '2024-05-15', '15:27:30', 1),
(464, '17.246.23.111', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-15', '23:27:04', 1),
(465, '17.246.15.199', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-15', '23:27:04', 1),
(466, '52.167.144.24', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'mobile', 'not found', '1', '2024-05-16', '03:35:56', 1),
(467, '40.77.167.126', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'mobile', 'not found', '1', '2024-05-16', '03:36:55', 1),
(468, '20.169.168.224', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.134 Safari/537.36', 'mobile', 'not found', '2', '2024-05-16', '16:32:55', 1),
(469, '103.156.215.115', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'mobile', 'not found', '5', '2024-05-16', '17:50:42', 1),
(470, '17.246.19.12', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-16', '22:34:30', 1),
(471, '17.246.23.71', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-16', '22:34:30', 1),
(472, '114.119.128.203', 'Mozilla/5.0 (Linux; Android 7.0;) AppleWebKit/537.36 (KHTML, like Gecko) Mobile Safari/537.36 (compatible; PetalBot;+https://webmaster.petalsearch.com/site/petalbot)', 'mobile', 'not found', '1', '2024-05-17', '03:57:24', 1),
(473, '66.249.65.110', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; Googlebot/2.1; +http://www.google.com/bot.html) Chrome/124.0.6367.201 Safari/537.36', 'mobile', 'not found', '1', '2024-05-17', '18:11:09', 1),
(474, '66.249.65.108', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; Googlebot/2.1; +http://www.google.com/bot.html) Chrome/124.0.6367.201 Safari/537.36', 'mobile', 'not found', '1', '2024-05-17', '18:11:09', 1);
INSERT INTO `hits_info` (`id`, `user_ip`, `user_agent`, `device`, `country`, `total_hits`, `d_date`, `d_time`, `status`) VALUES
(475, '17.22.245.97', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-17', '18:32:32', 1),
(476, '17.22.237.125', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-17', '18:32:32', 1),
(477, '17.22.237.242', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-18', '00:51:07', 1),
(478, '17.22.253.61', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-18', '00:51:07', 1),
(479, '87.249.132.42', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-05-18', '13:32:48', 1),
(480, '66.249.65.108', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; Googlebot/2.1; +http://www.google.com/bot.html) Chrome/124.0.6367.201 Safari/537.36', 'mobile', 'not found', '1', '2024-05-18', '13:41:19', 1),
(481, '66.249.65.106', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; Googlebot/2.1; +http://www.google.com/bot.html) Chrome/124.0.6367.201 Safari/537.36', 'mobile', 'not found', '1', '2024-05-18', '13:41:19', 1),
(482, '103.79.183.163', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-05-18', '17:12:33', 1),
(483, '17.246.19.105', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-19', '00:33:43', 1),
(484, '17.246.23.71', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-19', '00:33:43', 1),
(485, '66.249.70.2', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.6367.201 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '2', '2024-05-19', '09:16:26', 1),
(486, '66.249.70.3', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.6367.201 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '3', '2024-05-19', '13:04:20', 1),
(487, '35.237.29.227', 'ZoominfoBot (zoominfobot at zoominfo dot com)', 'mobile', 'not found', '1', '2024-05-19', '05:24:05', 1),
(488, '207.46.13.127', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'mobile', 'not found', '1', '2024-05-19', '05:50:57', 1),
(489, '34.148.79.159', 'ZoominfoBot (zoominfobot at zoominfo dot com)', 'mobile', 'not found', '1', '2024-05-19', '08:00:17', 1),
(490, '35.196.21.185', 'ZoominfoBot (zoominfobot at zoominfo dot com)', 'mobile', 'not found', '1', '2024-05-19', '11:06:06', 1),
(491, '34.148.132.116', 'ZoominfoBot (zoominfobot at zoominfo dot com)', 'mobile', 'not found', '1', '2024-05-19', '17:01:29', 1),
(492, '17.246.15.239', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-20', '00:31:55', 1),
(493, '17.246.23.199', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-20', '00:31:55', 1),
(494, '87.249.132.42', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-05-20', '02:35:41', 1),
(495, '157.55.39.10', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'mobile', 'not found', '1', '2024-05-20', '11:44:56', 1),
(496, '17.246.23.191', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-20', '14:24:41', 1),
(497, '17.246.23.152', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-20', '14:24:41', 1),
(498, '20.169.168.224', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.67 Safari/537.36', 'mobile', 'not found', '2', '2024-05-20', '15:54:52', 1),
(499, '66.249.70.2', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; Googlebot/2.1; +http://www.google.com/bot.html) Chrome/124.0.6367.201 Safari/537.36', 'mobile', 'not found', '1', '2024-05-20', '20:42:46', 1),
(500, '66.249.70.2', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; Googlebot/2.1; +http://www.google.com/bot.html) Chrome/124.0.6367.201 Safari/537.36', 'mobile', 'not found', '1', '2024-05-20', '20:42:46', 1),
(501, '17.22.253.134', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-20', '23:28:32', 1),
(502, '17.22.253.29', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-20', '23:28:32', 1),
(503, '114.119.145.225', 'Mozilla/5.0 (Linux; Android 7.0;) AppleWebKit/537.36 (KHTML, like Gecko) Mobile Safari/537.36 (compatible; PetalBot;+https://webmaster.petalsearch.com/site/petalbot)', 'mobile', 'not found', '1', '2024-05-21', '00:24:06', 1),
(504, '124.243.145.41', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.67 Safari/537.36', 'mobile', 'not found', '1', '2024-05-21', '02:42:54', 1),
(505, '66.249.70.4', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.6367.201 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '1', '2024-05-21', '02:49:16', 1),
(506, '66.249.70.3', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.6367.201 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '3', '2024-05-21', '19:59:53', 1),
(507, '66.249.70.2', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; Googlebot/2.1; +http://www.google.com/bot.html) Chrome/124.0.6367.201 Safari/537.36', 'mobile', 'not found', '2', '2024-05-21', '19:59:53', 1),
(508, '15.235.166.170', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.5112.79 Safari/537.36', 'mobile', 'not found', '1', '2024-05-21', '15:54:05', 1),
(509, '15.235.166.170', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.5112.79 Safari/537.36', 'mobile', 'not found', '1', '2024-05-21', '15:54:05', 1),
(510, '115.164.217.230', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:126.0) Gecko/20100101 Firefox/126.0', 'mobile', 'not found', '1', '2024-05-21', '19:17:15', 1),
(511, '115.164.217.230', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:126.0) Gecko/20100101 Firefox/126.0', 'mobile', 'not found', '1', '2024-05-21', '19:17:15', 1),
(512, '17.246.23.25', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-21', '23:49:38', 1),
(513, '17.246.15.204', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-21', '23:49:37', 1),
(514, '207.46.13.125', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'mobile', 'not found', '1', '2024-05-22', '01:04:26', 1),
(515, '66.249.70.2', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; Googlebot/2.1; +http://www.google.com/bot.html) Chrome/124.0.6367.201 Safari/537.36', 'mobile', 'not found', '1', '2024-05-22', '08:46:34', 1),
(516, '66.249.70.2', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; Googlebot/2.1; +http://www.google.com/bot.html) Chrome/124.0.6367.201 Safari/537.36', 'mobile', 'not found', '1', '2024-05-22', '08:46:34', 1),
(517, '66.249.70.3', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.6367.201 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '2', '2024-05-22', '08:46:35', 1),
(518, '17.241.219.63', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-22', '09:36:51', 1),
(519, '66.249.70.96', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.6422.65 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '1', '2024-05-22', '14:45:22', 1),
(520, '114.119.128.203', 'Mozilla/5.0 (Linux; Android 7.0;) AppleWebKit/537.36 (KHTML, like Gecko) Mobile Safari/537.36 (compatible; PetalBot;+https://webmaster.petalsearch.com/site/petalbot)', 'mobile', 'not found', '1', '2024-05-22', '17:00:59', 1),
(521, '121.120.69.215', 'Mozilla/5.0 (iPhone; CPU iPhone OS 17_4_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4.1 Mobile/15E148 Safari/604.1', 'mobile', 'not found', '1', '2024-05-22', '20:57:45', 1),
(522, '121.120.69.215', 'Mozilla/5.0 (iPhone; CPU iPhone OS 17_4_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4.1 Mobile/15E148 Safari/604.1', 'mobile', 'not found', '1', '2024-05-22', '20:57:45', 1),
(523, '17.241.75.194', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-23', '05:36:23', 1),
(524, '17.241.227.251', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-23', '05:36:23', 1),
(525, '17.241.75.25', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-23', '10:30:03', 1),
(526, '17.241.227.25', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-23', '10:30:03', 1),
(527, '172.176.75.89', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.63 Safari/537.36', 'mobile', 'not found', '2', '2024-05-23', '12:57:25', 1),
(528, '103.167.209.172', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-05-23', '14:09:51', 1),
(529, '173.252.127.116', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36 Edg/125.0.0.0', 'mobile', 'not found', '1', '2024-05-23', '14:13:57', 1),
(530, '173.252.127.6', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36 Edg/125.0.0.0', 'mobile', 'not found', '1', '2024-05-23', '14:13:57', 1),
(531, '173.252.95.20', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Mobile Safari/537.36', 'mobile', 'not found', '1', '2024-05-23', '14:14:05', 1),
(532, '173.252.95.21', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Mobile Safari/537.36', 'mobile', 'not found', '1', '2024-05-23', '14:14:05', 1),
(533, '31.13.115.4', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-05-23', '14:14:27', 1),
(534, '20.169.168.224', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.63 Safari/537.36', 'mobile', 'not found', '2', '2024-05-23', '20:42:29', 1),
(535, '37.111.203.213', 'Mozilla/5.0 (Linux; Android 11; vivo 1819; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/87.0.4280.141 Mobile Safari/537.36 VivoBrowser/12.1.2.0', 'mobile', 'not found', '4', '2024-05-24', '01:00:28', 1),
(536, '17.246.15.33', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-24', '01:59:12', 1),
(537, '66.249.70.2', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; Googlebot/2.1; +http://www.google.com/bot.html) Chrome/125.0.6422.66 Safari/537.36', 'mobile', 'not found', '2', '2024-05-24', '07:33:51', 1),
(538, '66.249.70.3', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; Googlebot/2.1; +http://www.google.com/bot.html) Chrome/125.0.6422.66 Safari/537.36', 'mobile', 'not found', '1', '2024-05-24', '13:18:21', 1),
(539, '66.249.70.4', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; Googlebot/2.1; +http://www.google.com/bot.html) Chrome/125.0.6422.66 Safari/537.36', 'mobile', 'not found', '1', '2024-05-24', '13:18:21', 1),
(540, '49.237.5.147', 'Mozilla/5.0 (iPhone; CPU iPhone OS 17_4_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4.1 Mobile/15E148 Safari/604.1', 'mobile', 'not found', '1', '2024-05-24', '15:32:56', 1),
(541, '17.22.245.23', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-24', '22:46:41', 1),
(542, '17.22.237.249', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-24', '22:46:41', 1),
(543, '17.22.237.197', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-25', '00:07:20', 1),
(544, '17.22.245.190', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-25', '00:07:20', 1),
(545, '66.249.70.4', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.6422.66 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '3', '2024-05-25', '18:25:30', 1),
(546, '66.249.70.4', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.6422.66 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '3', '2024-05-25', '18:25:30', 1),
(547, '66.249.70.2', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; Googlebot/2.1; +http://www.google.com/bot.html) Chrome/125.0.6422.66 Safari/537.36', 'mobile', 'not found', '1', '2024-05-25', '06:35:09', 1),
(548, '66.249.70.3', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; Googlebot/2.1; +http://www.google.com/bot.html) Chrome/125.0.6422.66 Safari/537.36', 'mobile', 'not found', '1', '2024-05-25', '06:35:09', 1),
(549, '3.22.234.244', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-05-25', '07:24:29', 1),
(550, '103.79.183.163', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'mobile', 'not found', '19', '2024-05-25', '12:47:32', 1),
(551, '17.241.219.9', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-25', '17:07:00', 1),
(552, '103.156.215.115', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'mobile', 'not found', '1', '2024-05-25', '19:48:33', 1),
(553, '66.249.70.2', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '3', '2024-05-26', '13:02:33', 1),
(554, '66.249.70.3', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '5', '2024-05-26', '19:22:15', 1),
(555, '66.249.70.4', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '2', '2024-05-26', '07:24:08', 1),
(556, '17.241.75.24', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-26', '01:06:09', 1),
(557, '87.249.132.30', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.79 Safari/537.36', 'mobile', 'not found', '2', '2024-05-26', '04:22:51', 1),
(558, '114.119.145.225', 'Mozilla/5.0 (Linux; Android 7.0;) AppleWebKit/537.36 (KHTML, like Gecko) Mobile Safari/537.36 (compatible; PetalBot;+https://webmaster.petalsearch.com/site/petalbot)', 'mobile', 'not found', '1', '2024-05-26', '06:20:00', 1),
(559, '42.238.199.174', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1847.137 Safari/4E423F', 'mobile', 'not found', '1', '2024-05-26', '07:35:16', 1),
(560, '116.30.121.232', 'Mozilla/5.0 (Windows NT 10.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.93 Safari/537.36', 'mobile', 'not found', '1', '2024-05-26', '09:55:54', 1),
(561, '163.204.217.225', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36', 'mobile', 'not found', '2', '2024-05-26', '11:35:57', 1),
(562, '120.230.199.229', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.17 (KHTML, like Gecko) Chrome/24.0.1312.60 Safari/537.17', 'mobile', 'not found', '1', '2024-05-26', '12:13:02', 1),
(563, '103.4.145.243', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'mobile', 'not found', '1', '2024-05-26', '14:20:32', 1),
(564, '103.130.118.6', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'mobile', 'not found', '1', '2024-05-26', '14:20:35', 1),
(565, '173.252.127.6', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 'mobile', 'not found', '1', '2024-05-26', '14:27:25', 1),
(566, '35.212.147.88', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko; compatible; BW/1.2; rb.gy/oupwis) Chrome/124.0.0.0 Safari/537.36', 'mobile', 'not found', '1', '2024-05-26', '22:05:22', 1),
(567, '66.249.70.4', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '1', '2024-05-27', '00:33:21', 1),
(568, '66.249.70.3', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '3', '2024-05-27', '15:57:26', 1),
(569, '17.241.219.230', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-27', '01:17:02', 1),
(570, '66.249.70.2', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '4', '2024-05-27', '13:42:39', 1),
(571, '146.190.171.159', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36', 'mobile', 'not found', '1', '2024-05-27', '07:42:58', 1),
(572, '17.241.227.228', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-27', '14:22:01', 1),
(573, '45.80.158.135', 'Go-http-client/2.0', 'mobile', 'not found', '2', '2024-05-27', '22:04:58', 1),
(574, '17.241.219.204', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-27', '23:39:18', 1),
(575, '114.119.166.95', 'Mozilla/5.0 (Linux; Android 7.0;) AppleWebKit/537.36 (KHTML, like Gecko) Mobile Safari/537.36 (compatible; PetalBot;+https://webmaster.petalsearch.com/site/petalbot)', 'mobile', 'not found', '2', '2024-05-28', '10:21:27', 1),
(576, '66.249.70.2', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '4', '2024-05-28', '18:51:46', 1),
(577, '51.158.120.7', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', 'mobile', 'not found', '1', '2024-05-28', '04:56:56', 1),
(578, '66.220.149.3', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 'mobile', 'not found', '1', '2024-05-28', '07:12:03', 1),
(579, '66.249.70.3', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.6422.65 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '1', '2024-05-28', '10:41:21', 1),
(580, '157.55.39.12', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'mobile', 'not found', '1', '2024-05-28', '11:59:10', 1),
(581, '52.163.228.59', 'Mozlila/5.0 (Linux; Android 7.0; SM-G892A Bulid/NRD90M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/60.0.3112.107 Moblie Safari/537.36', 'mobile', 'not found', '1', '2024-05-28', '14:18:46', 1),
(582, '17.241.227.213', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-28', '23:28:40', 1),
(583, '66.249.70.2', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '1', '2024-05-29', '00:39:44', 1),
(584, '113.117.74.8', 'Mozilla/5.0 (Windows NT 6.1; WOW64; Trident/7.0; rv:11.0) like Gecko', 'mobile', 'not found', '1', '2024-05-29', '04:55:25', 1),
(585, '147.182.148.45', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36', 'mobile', 'not found', '1', '2024-05-29', '06:50:30', 1),
(586, '141.140.11.24', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'mobile', 'not found', '1', '2024-05-29', '07:27:11', 1),
(587, '52.167.144.181', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'mobile', 'not found', '1', '2024-05-29', '15:42:12', 1),
(588, '159.65.84.138', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36', 'mobile', 'not found', '1', '2024-05-29', '18:39:06', 1),
(589, '34.74.85.234', 'ZoominfoBot (zoominfobot at zoominfo dot com)', 'mobile', 'not found', '1', '2024-05-30', '02:15:20', 1),
(590, '114.119.166.95', 'Mozilla/5.0 (Linux; Android 7.0;) AppleWebKit/537.36 (KHTML, like Gecko) Mobile Safari/537.36 (compatible; PetalBot;+https://webmaster.petalsearch.com/site/petalbot)', 'mobile', 'not found', '1', '2024-05-30', '03:16:20', 1),
(591, '23.26.108.174', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.63 Safari/537.36', 'mobile', 'not found', '2', '2024-05-30', '04:02:14', 1),
(592, '17.241.75.151', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-30', '04:20:22', 1),
(593, '172.176.75.89', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.63 Safari/537.36', 'mobile', 'not found', '2', '2024-05-30', '20:16:56', 1),
(594, '209.58.142.229', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '1', '2024-05-30', '07:28:01', 1),
(595, '193.30.243.69', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.127 Safari/537.36', 'mobile', 'not found', '1', '2024-05-30', '08:08:38', 1),
(596, '34.172.63.146', 'Symfony BrowserKit', 'mobile', 'not found', '1', '2024-05-30', '10:46:31', 1),
(597, '34.74.193.156', 'ZoominfoBot (zoominfobot at zoominfo dot com)', 'mobile', 'not found', '1', '2024-05-30', '16:44:52', 1),
(598, '17.241.227.36', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-30', '23:13:12', 1),
(599, '5.133.192.136', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', 'mobile', 'not found', '1', '2024-05-31', '00:43:59', 1),
(600, '66.249.70.2', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '4', '2024-05-31', '08:00:01', 1),
(601, '15.204.206.70', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'mobile', 'not found', '1', '2024-05-31', '05:34:20', 1),
(602, '103.79.183.162', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'mobile', 'not found', '37', '2024-05-31', '21:30:04', 1),
(603, '52.165.149.97', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.127 Safari/537.36', 'mobile', 'not found', '1', '2024-05-31', '07:10:54', 1),
(604, '20.169.168.224', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 'mobile', 'not found', '1', '2024-05-31', '07:13:29', 1),
(605, '66.249.70.3', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '1', '2024-05-31', '07:57:48', 1),
(606, '139.171.106.98', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'mobile', 'not found', '1', '2024-05-31', '08:11:59', 1),
(607, '66.249.70.96', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.6422.141 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '2', '2024-05-31', '16:24:10', 1),
(608, '52.167.144.181', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'mobile', 'not found', '1', '2024-05-31', '08:34:28', 1),
(609, '66.249.70.1', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '1', '2024-05-31', '10:03:36', 1),
(610, '188.166.95.54', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-05-31', '10:17:19', 1),
(611, '167.99.238.237', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-05-31', '11:58:42', 1),
(612, '66.249.70.99', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.6422.141 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '1', '2024-05-31', '13:02:54', 1),
(613, '2.58.56.147', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', 'mobile', 'not found', '1', '2024-05-31', '14:00:00', 1),
(614, '66.249.70.8', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '1', '2024-05-31', '14:23:52', 1),
(615, '66.249.70.4', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '1', '2024-05-31', '14:31:38', 1),
(616, '64.15.129.104', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'mobile', 'not found', '1', '2024-05-31', '14:42:20', 1),
(617, '64.15.129.109', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'mobile', 'not found', '1', '2024-05-31', '14:42:21', 1),
(618, '64.15.129.102', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'mobile', 'not found', '1', '2024-05-31', '14:42:23', 1),
(619, '192.175.111.228', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'mobile', 'not found', '1', '2024-05-31', '14:42:23', 1),
(620, '17.241.219.145', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-31', '16:17:04', 1),
(621, '66.249.70.98', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.6422.141 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '1', '2024-05-31', '17:29:45', 1),
(622, '66.249.66.17', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.6422.141 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '3', '2024-05-31', '23:01:10', 1),
(623, '173.252.83.5', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 'mobile', 'not found', '1', '2024-05-31', '18:38:29', 1),
(624, '173.252.83.14', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 'mobile', 'not found', '1', '2024-05-31', '18:38:29', 1),
(625, '103.12.174.24', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36 Edg/125.0.0.0', 'mobile', 'not found', '1', '2024-05-31', '19:19:13', 1),
(626, '66.249.66.16', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '1', '2024-05-31', '19:44:15', 1),
(627, '114.119.145.225', 'Mozilla/5.0 (Linux; Android 7.0;) AppleWebKit/537.36 (KHTML, like Gecko) Mobile Safari/537.36 (compatible; PetalBot;+https://webmaster.petalsearch.com/site/petalbot)', 'mobile', 'not found', '1', '2024-05-31', '20:03:57', 1),
(628, '114.119.166.95', 'Mozilla/5.0 (Linux; Android 7.0;) AppleWebKit/537.36 (KHTML, like Gecko) Mobile Safari/537.36 (compatible; PetalBot;+https://webmaster.petalsearch.com/site/petalbot)', 'mobile', 'not found', '2', '2024-05-31', '21:15:17', 1),
(629, '17.241.75.80', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-05-31', '23:46:06', 1),
(630, '17.241.219.153', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-06-01', '00:59:53', 1),
(631, '66.249.66.14', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '1', '2024-06-01', '01:29:08', 1),
(632, '66.249.66.17', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '3', '2024-06-01', '19:48:03', 1),
(633, '66.249.66.16', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.6422.141 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '5', '2024-06-01', '19:16:39', 1),
(634, '66.249.66.18', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.6422.141 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '4', '2024-06-01', '23:00:47', 1),
(635, '44.200.203.30', 'Ruby, Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.80 Safari/537.36', 'mobile', 'not found', '1', '2024-06-01', '04:26:18', 1),
(636, '69.12.94.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'mobile', 'not found', '1', '2024-06-01', '06:28:36', 1),
(637, '66.249.66.199', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.6422.141 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '2', '2024-06-01', '21:36:13', 1),
(638, '114.119.166.95', 'Mozilla/5.0 (Linux; Android 7.0;) AppleWebKit/537.36 (KHTML, like Gecko) Mobile Safari/537.36 (compatible; PetalBot;+https://webmaster.petalsearch.com/site/petalbot)', 'mobile', 'not found', '1', '2024-06-01', '09:32:47', 1),
(639, '54.214.124.157', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.65 Safari/537.3', 'mobile', 'not found', '1', '2024-06-01', '09:48:18', 1),
(640, '66.249.66.15', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '3', '2024-06-01', '19:29:57', 1),
(641, '114.119.128.203', 'Mozilla/5.0 (Linux; Android 7.0;) AppleWebKit/537.36 (KHTML, like Gecko) Mobile Safari/537.36 (compatible; PetalBot;+https://webmaster.petalsearch.com/site/petalbot)', 'mobile', 'not found', '1', '2024-06-01', '15:17:56', 1),
(642, '192.36.109.84', 'Mozilla/5.0 (iPhone; CPU iPhone OS 17_1_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.1.2 Mobile/15E148 Safari/604', 'mobile', 'not found', '1', '2024-06-01', '15:54:50', 1),
(643, '103.79.183.162', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:126.0) Gecko/20100101 Firefox/126.0', 'mobile', 'not found', '4', '2024-06-01', '23:44:05', 1),
(644, '103.79.183.162', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:126.0) Gecko/20100101 Firefox/126.0', 'mobile', 'not found', '1', '2024-06-02', '00:39:01', 1),
(645, '66.249.66.16', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '4', '2024-06-02', '23:27:32', 1),
(646, '195.90.221.76', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36 Edg/91.0.864.54', 'mobile', 'not found', '1', '2024-06-02', '01:07:20', 1),
(647, '17.241.227.124', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-06-02', '02:09:51', 1),
(648, '172.105.35.103', 'Mozilla/5.0 (compatible; Example3/1.0; +https://www.example3.com/domain/globalconnex.com.au)', 'mobile', 'not found', '1', '2024-06-02', '03:17:25', 1),
(649, '66.249.66.200', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.6422.141 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '2', '2024-06-02', '14:19:16', 1),
(650, '104.28.254.46', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.69 Safari/537.36', 'mobile', 'not found', '1', '2024-06-02', '04:19:23', 1),
(651, '66.249.66.18', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '6', '2024-06-02', '22:18:03', 1),
(652, '66.249.66.14', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '3', '2024-06-02', '23:29:49', 1),
(653, '138.197.146.25', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-06-02', '06:57:15', 1),
(654, '66.249.66.17', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.6422.141 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '2', '2024-06-02', '17:35:52', 1),
(655, '3.106.216.26', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.121 Safari/537.36', 'mobile', 'not found', '1', '2024-06-02', '08:53:08', 1),
(656, '40.77.167.60', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'mobile', 'not found', '1', '2024-06-02', '11:11:55', 1),
(657, '81.181.60.65', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.1.5) Gecko/20091102 Firefox/3.5.5 (.NET CLR 3.5.30729)', 'mobile', 'not found', '1', '2024-06-02', '12:55:05', 1),
(658, '182.74.243.49', 'Java/11.0.2', 'mobile', 'not found', '1', '2024-06-02', '16:53:46', 1),
(659, '66.249.66.15', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '2', '2024-06-02', '23:02:45', 1),
(660, '185.176.220.143', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:47.0) Gecko/20100101 Firefox/47.0', 'mobile', 'not found', '2', '2024-06-03', '00:08:04', 1),
(661, '66.249.66.14', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.6422.141 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '4', '2024-06-03', '14:15:05', 1),
(662, '66.249.66.16', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.6422.141 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '6', '2024-06-03', '18:44:01', 1),
(663, '52.167.144.163', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'mobile', 'not found', '1', '2024-06-03', '02:30:08', 1),
(664, '114.119.145.225', 'Mozilla/5.0 (Linux; Android 7.0;) AppleWebKit/537.36 (KHTML, like Gecko) Mobile Safari/537.36 (compatible; PetalBot;+https://webmaster.petalsearch.com/site/petalbot)', 'mobile', 'not found', '2', '2024-06-03', '08:25:11', 1),
(665, '110.172.52.27', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4895.86 Safari/537.36', 'mobile', 'not found', '1', '2024-06-03', '05:43:57', 1),
(666, '66.249.66.18', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '4', '2024-06-03', '16:07:17', 1),
(667, '66.249.66.200', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.6422.141 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '1', '2024-06-03', '08:47:28', 1),
(668, '66.249.66.199', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.84 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '1', '2024-06-03', '08:47:35', 1),
(669, '66.249.66.17', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.6422.141 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '4', '2024-06-03', '19:13:39', 1),
(670, '69.12.94.96', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'mobile', 'not found', '4', '2024-06-03', '14:33:44', 1),
(671, '17.241.227.217', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-06-03', '11:23:42', 1),
(672, '66.249.66.15', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '2', '2024-06-03', '18:50:29', 1),
(673, '173.252.127.15', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 'mobile', 'not found', '1', '2024-06-03', '12:10:37', 1),
(674, '173.252.127.5', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 'mobile', 'not found', '1', '2024-06-03', '12:10:37', 1),
(675, '27.147.134.62', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'mobile', 'not found', '4', '2024-06-03', '13:55:33', 1),
(676, '118.179.168.78', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:109.0) Gecko/20100101 Firefox/115.0', 'mobile', 'not found', '1', '2024-06-03', '14:21:56', 1),
(677, '27.147.218.130', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-06-03', '16:10:27', 1),
(678, '34.32.0.75', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'mobile', 'not found', '1', '2024-06-03', '16:52:51', 1),
(679, '42.238.199.73', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 Safari/537.36', 'mobile', 'not found', '1', '2024-06-03', '17:04:34', 1),
(680, '114.119.128.244', 'Mozilla/5.0 (Linux; Android 7.0;) AppleWebKit/537.36 (KHTML, like Gecko) Mobile Safari/537.36 (compatible; PetalBot;+https://webmaster.petalsearch.com/site/petalbot)', 'mobile', 'not found', '1', '2024-06-03', '18:12:05', 1),
(681, '113.75.206.230', 'Mozilla/5.0 (Windows NT 6.2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1464.0 Safari/537.36', 'mobile', 'not found', '1', '2024-06-03', '18:33:53', 1),
(682, '52.167.144.188', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'mobile', 'not found', '1', '2024-06-03', '19:34:20', 1),
(683, '45.87.104.224', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/536.5 (KHTML, like Gecko) Chrome/19.0.1084.9 Safari/536.5', 'mobile', 'not found', '1', '2024-06-03', '21:12:39', 1),
(684, '107.172.106.236', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.0 Safari/537.36', 'mobile', 'not found', '1', '2024-06-03', '23:31:46', 1),
(685, '66.249.66.17', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.6422.141 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '2', '2024-06-04', '00:45:42', 1),
(686, '66.249.66.200', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.6422.141 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '2', '2024-06-04', '15:43:17', 1),
(687, '66.249.66.16', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '3', '2024-06-04', '12:59:44', 1),
(688, '66.249.66.15', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '2', '2024-06-04', '10:18:11', 1),
(689, '40.77.167.23', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'mobile', 'not found', '1', '2024-06-04', '02:20:52', 1),
(690, '66.249.66.18', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '4', '2024-06-04', '13:58:08', 1),
(691, '52.167.144.16', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'mobile', 'not found', '1', '2024-06-04', '04:56:15', 1),
(692, '147.182.153.91', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-06-04', '06:38:17', 1),
(693, '114.119.145.225', 'Mozilla/5.0 (Linux; Android 7.0;) AppleWebKit/537.36 (KHTML, like Gecko) Mobile Safari/537.36 (compatible; PetalBot;+https://webmaster.petalsearch.com/site/petalbot)', 'mobile', 'not found', '1', '2024-06-04', '10:20:10', 1),
(694, '173.252.87.11', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 'mobile', 'not found', '1', '2024-06-04', '13:36:57', 1),
(695, '69.171.231.7', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 'mobile', 'not found', '1', '2024-06-04', '13:37:13', 1),
(696, '31.13.115.5', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 'mobile', 'not found', '1', '2024-06-04', '13:38:59', 1),
(697, '173.252.107.4', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 'mobile', 'not found', '1', '2024-06-04', '13:39:04', 1),
(698, '17.241.227.59', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-06-04', '13:58:02', 1),
(699, '66.249.66.199', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.6422.141 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '1', '2024-06-04', '14:10:24', 1),
(700, '173.252.83.23', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 'mobile', 'not found', '1', '2024-06-04', '14:35:02', 1),
(701, '31.13.127.3', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 'mobile', 'not found', '1', '2024-06-04', '14:35:12', 1),
(702, '31.13.103.116', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 'mobile', 'not found', '1', '2024-06-04', '14:39:04', 1),
(703, '27.147.134.62', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'mobile', 'not found', '3', '2024-06-04', '15:43:41', 1),
(704, '66.249.64.132', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '2', '2024-06-04', '22:39:54', 1),
(705, '66.249.64.129', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '1', '2024-06-04', '16:52:23', 1),
(706, '66.249.64.131', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '1', '2024-06-04', '17:38:42', 1),
(707, '54.36.148.236', 'Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)', 'mobile', 'not found', '1', '2024-06-04', '18:26:19', 1),
(708, '103.174.193.44', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:109.0) Gecko/20100101 Firefox/115.0', 'mobile', 'not found', '1', '2024-06-04', '21:19:21', 1),
(709, '103.79.183.162', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-06-04', '21:57:40', 1),
(710, '17.241.219.100', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'mobile', 'not found', '1', '2024-06-04', '22:24:36', 1),
(711, '69.171.231.117', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 'mobile', 'not found', '1', '2024-06-04', '22:26:17', 1),
(712, '31.13.103.118', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 'mobile', 'not found', '1', '2024-06-04', '22:29:38', 1),
(713, '69.171.249.5', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 'mobile', 'not found', '1', '2024-06-04', '22:29:39', 1);
INSERT INTO `hits_info` (`id`, `user_ip`, `user_agent`, `device`, `country`, `total_hits`, `d_date`, `d_time`, `status`) VALUES
(714, '31.13.127.10', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 'mobile', 'not found', '1', '2024-06-04', '22:29:42', 1),
(715, '124.236.100.56', 'Mozilla/5.0 (Linux; Android 10; Pixel 4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Mobile Safari/537.36', 'mobile', 'not found', '2', '2024-06-04', '23:17:00', 1),
(716, '40.77.167.255', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'mobile', 'not found', '1', '2024-06-04', '23:01:50', 1),
(717, '31.13.103.4', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 'mobile', 'not found', '1', '2024-06-04', '23:02:27', 1),
(718, '31.13.103.6', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 'mobile', 'not found', '1', '2024-06-04', '23:02:27', 1),
(719, '66.249.70.8', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '1', '2024-06-04', '23:50:27', 1),
(720, '66.249.70.2', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '3', '2024-06-05', '13:47:02', 1),
(721, '66.249.70.1', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '5', '2024-06-05', '16:15:08', 1),
(722, '66.249.70.3', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.6422.141 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '5', '2024-06-05', '23:50:28', 1),
(723, '3.250.59.90', 'Mozilla/5.0 (compatible; NetcraftSurveyAgent/1.0; +info@netcraft.com)', 'mobile', 'not found', '1', '2024-06-05', '03:51:47', 1),
(724, '66.249.70.4', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.6422.141 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '4', '2024-06-05', '22:49:59', 1),
(725, '66.249.70.99', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.6422.141 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '1', '2024-06-05', '04:45:15', 1),
(726, '66.249.70.96', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.6422.141 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '3', '2024-06-05', '12:48:34', 1),
(727, '124.236.100.56', 'Mozilla/5.0 (Linux; Android 10; Pixel 4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Mobile Safari/537.36', 'mobile', 'not found', '1', '2024-06-05', '06:22:38', 1),
(728, '42.238.199.50', 'Mozilla/5.0 (Windows NT 10.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.93 Safari/537.36', 'mobile', 'not found', '1', '2024-06-05', '07:43:51', 1),
(729, '173.252.95.16', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 'mobile', 'not found', '1', '2024-06-05', '09:11:40', 1),
(730, '69.12.94.92', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-06-05', '09:11:53', 1),
(731, '103.174.193.44', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36 Edg/109.0.1518.140', 'mobile', 'not found', '1', '2024-06-05', '09:14:10', 1),
(732, '27.147.134.62', 'WhatsApp/2.23.20.0', 'mobile', 'not found', '1', '2024-06-05', '09:26:29', 1),
(733, '40.77.167.255', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'mobile', 'not found', '1', '2024-06-05', '11:54:13', 1),
(734, '66.249.70.97', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.6422.141 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '2', '2024-06-05', '18:43:17', 1),
(735, '40.77.167.22', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'mobile', 'not found', '1', '2024-06-05', '15:47:23', 1),
(736, '23.95.251.197', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.81 Safari/537.36', 'mobile', 'not found', '2', '2024-06-05', '18:58:54', 1),
(737, '202.91.43.178', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36 Edg/125.0.0.0', 'mobile', 'not found', '1', '2024-06-05', '19:06:25', 1),
(738, '66.249.70.101', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.6422.141 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '1', '2024-06-05', '19:44:50', 1),
(739, '154.51.142.76', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.81 Safari/537.36', 'mobile', 'not found', '2', '2024-06-05', '20:02:43', 1),
(740, '54.36.149.57', 'Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)', 'mobile', 'not found', '1', '2024-06-05', '20:07:34', 1),
(741, '43.153.84.184', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.192 Safari/537.36', 'mobile', 'not found', '1', '2024-06-05', '21:16:29', 1),
(742, '43.133.39.27', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.192 Safari/537.36', 'mobile', 'not found', '1', '2024-06-05', '21:16:52', 1),
(743, '5.133.192.87', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', 'mobile', 'not found', '1', '2024-06-05', '22:20:26', 1),
(744, '23.95.210.207', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.81 Safari/537.36', 'mobile', 'not found', '5', '2024-06-05', '22:39:23', 1),
(745, '107.173.212.89', 'Mozilla/5.0 (Linux; Android 8.0.0; LG-H870DS Build/OPR1.170623.032) AppleWebKit/537.37 (KHTML, like Gecko) Chrome/68.0.3440.91 Mobile Safari/537.36', 'mobile', 'not found', '1', '2024-06-05', '22:38:24', 1),
(746, '103.79.183.162', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-06-05', '22:57:22', 1),
(747, '66.249.70.8', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '1', '2024-06-05', '22:57:32', 1),
(748, '163.204.219.1', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; Tablet PC 2.0)', 'mobile', 'not found', '1', '2024-06-05', '23:41:25', 1),
(749, '66.249.70.107', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.6422.141 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '1', '2024-06-06', '00:56:30', 1),
(750, '38.107.85.101', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_2) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.0.2 Safari/605.1.15', 'mobile', 'not found', '4', '2024-06-06', '01:40:20', 1),
(751, '38.107.85.190', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_2) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.0.2 Safari/605.1.15', 'mobile', 'not found', '4', '2024-06-06', '02:50:57', 1),
(752, '38.107.84.173', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_2) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.0.2 Safari/605.1.15', 'mobile', 'not found', '4', '2024-06-06', '03:09:23', 1),
(753, '116.22.172.80', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/532.0', 'mobile', 'not found', '1', '2024-06-06', '03:10:55', 1),
(754, '114.119.166.95', 'Mozilla/5.0 (Linux; Android 7.0;) AppleWebKit/537.36 (KHTML, like Gecko) Mobile Safari/537.36 (compatible; PetalBot;+https://webmaster.petalsearch.com/site/petalbot)', 'mobile', 'not found', '3', '2024-06-06', '15:58:39', 1),
(755, '31.13.115.116', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 'mobile', 'not found', '1', '2024-06-06', '03:16:05', 1),
(756, '35.183.181.109', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.127 Safari/537.36', 'mobile', 'not found', '1', '2024-06-06', '04:22:27', 1),
(757, '66.249.70.2', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '8', '2024-06-06', '14:33:42', 1),
(758, '66.249.70.1', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '3', '2024-06-06', '14:43:34', 1),
(759, '66.249.70.4', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.6422.168 Mobile Safari/537.36 (compatible; GoogleOther)', 'mobile', 'not found', '1', '2024-06-06', '07:10:21', 1),
(760, '66.249.70.3', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.6422.141 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '1', '2024-06-06', '07:44:58', 1),
(761, '34.90.179.62', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 'mobile', 'not found', '1', '2024-06-06', '07:58:57', 1),
(762, '167.99.57.58', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-06-06', '09:15:42', 1),
(763, '37.111.207.200', 'Mozilla/5.0 (Linux; Android 12; SM-A015F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/124.0.6367.179 Mobile Safari/537.36 [FB_IAB/FB4A;FBAV/465.0.0.63.83;]', 'mobile', 'not found', '1', '2024-06-06', '09:26:35', 1),
(764, '69.171.231.120', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 'mobile', 'not found', '1', '2024-06-06', '09:26:59', 1),
(765, '54.36.148.113', 'Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)', 'mobile', 'not found', '1', '2024-06-06', '10:58:40', 1),
(766, '173.252.83.117', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 'mobile', 'not found', '1', '2024-06-06', '11:46:17', 1),
(767, '114.119.128.203', 'Mozilla/5.0 (Linux; Android 7.0;) AppleWebKit/537.36 (KHTML, like Gecko) Mobile Safari/537.36 (compatible; PetalBot;+https://webmaster.petalsearch.com/site/petalbot)', 'mobile', 'not found', '1', '2024-06-06', '13:17:11', 1),
(768, '66.249.65.109', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.6422.168 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '5', '2024-06-06', '22:31:28', 1),
(769, '66.249.65.107', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.6422.168 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '1', '2024-06-06', '17:22:54', 1),
(770, '44.200.220.23', 'Iframely/1.3.1 (+https://iframely.com/docs/about) Canva', 'mobile', 'not found', '1', '2024-06-06', '18:18:18', 1),
(771, '52.167.144.190', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'mobile', 'not found', '1', '2024-06-06', '18:38:07', 1),
(772, '66.249.65.96', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '1', '2024-06-06', '21:21:00', 1),
(773, '31.13.103.7', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 'mobile', 'not found', '1', '2024-06-06', '22:07:42', 1),
(774, '173.252.87.11', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 'mobile', 'not found', '1', '2024-06-06', '23:50:29', 1),
(775, '173.252.87.2', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 'mobile', 'not found', '1', '2024-06-06', '23:50:29', 1),
(776, '34.151.223.208', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Vivaldi/5.3.2679.68', 'mobile', 'not found', '1', '2024-06-07', '00:07:01', 1),
(777, '66.249.65.109', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.6422.168 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'mobile', 'not found', '1', '2024-06-07', '00:22:49', 1),
(778, '52.167.144.233', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'mobile', 'not found', '1', '2024-06-07', '00:50:11', 1),
(779, '42.238.199.50', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Firefox/58.0.1', 'mobile', 'not found', '1', '2024-06-07', '01:34:02', 1),
(780, '103.79.183.162', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'mobile', 'not found', '1', '2024-06-07', '01:48:39', 1),
(781, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:126.0) Gecko/20100101 Firefox/126.0', 'mobile', 'not found', '1', '2024-06-07', '06:22:29', 1),
(782, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-06-07', '11:19:06', 1),
(783, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'mobile', 'not found', '1', '2024-06-12', '23:57:56', 1),
(784, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-06-13', '01:14:29', 1),
(785, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-06-14', '23:15:57', 1),
(786, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'mobile', 'not found', '5', '2024-06-15', '16:25:58', 1),
(787, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:127.0) Gecko/20100101 Firefox/127.0', 'mobile', 'not found', '1', '2024-06-15', '16:37:10', 1),
(788, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'mobile', 'not found', '3', '2024-06-16', '17:54:26', 1),
(789, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:127.0) Gecko/20100101 Firefox/127.0', 'mobile', 'not found', '3', '2024-06-16', '20:35:35', 1),
(790, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-06-17', '17:18:44', 1),
(791, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'mobile', 'not found', '4', '2024-06-18', '18:55:54', 1),
(792, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'mobile', 'not found', '4', '2024-06-18', '18:55:54', 1),
(793, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'mobile', 'not found', '4', '2024-06-21', '16:36:46', 1),
(794, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-06-24', '23:47:41', 1),
(795, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'mobile', 'not found', '2', '2024-06-26', '23:24:05', 1),
(796, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'mobile', 'not found', '1', '2024-06-28', '16:44:21', 1),
(797, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'mobile', 'not found', '1', '2024-06-30', '01:49:34', 1);

-- --------------------------------------------------------

--
-- Table structure for table `home_about_company`
--

CREATE TABLE `home_about_company` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `title` text NOT NULL,
  `details` text NOT NULL,
  `link` text NOT NULL,
  `phone` varchar(50) NOT NULL,
  `d_date` varchar(50) NOT NULL,
  `d_time` varchar(50) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_about_company`
--

INSERT INTO `home_about_company` (`id`, `image`, `title`, `details`, `link`, `phone`, `d_date`, `d_time`, `status`) VALUES
(1, '4dec502684cdc91449f992ba562af800.jpeg', 'Introduction', 'Global Conex Pty Ltd is a premier immigration consultancy firm that specializes in assisting students and professionals in obtaining student and work visas for Australia, Canada, New Zealand, Sweden, and Malaysia. Our company is dedicated to providing comprehensive immigration services to individuals and families, making their dreams of studying and working abroad reality.\r\nOverseas Education: We are Promoting 50+ government- or private-approved and universities in Australia, Canada, and New Zealand directly or through our associates for Study Abroad.\r\nImmigration Consultation: We are offering better guidance to clients for Work permits and permanent residence (PR) in foreign countries like Canada,Australia, and New Zealand, with 50+ Programs.', 'http://globalconnex.com.au/demo/', '+ 88 01966601743', '2023-10-17', '11:58:01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `home_contact`
--

CREATE TABLE `home_contact` (
  `id` int(11) NOT NULL,
  `address` text NOT NULL,
  `email` text NOT NULL,
  `phone` varchar(50) NOT NULL,
  `d_date` varchar(20) NOT NULL,
  `d_time` varchar(20) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_contact`
--

INSERT INTO `home_contact` (`id`, `address`, `email`, `phone`, `d_date`, `d_time`, `status`) VALUES
(1, 'Suite #9, 35-39 Auburn Road, Auburn, NSW 2144, Australia', 'info@globalconnex.com.au', '+61 411 155 379', '2024-03-28', '22:53:47', 1);

-- --------------------------------------------------------

--
-- Table structure for table `home_country_offer`
--

CREATE TABLE `home_country_offer` (
  `id` int(11) NOT NULL,
  `country_image` text NOT NULL,
  `country_name` text NOT NULL,
  `details` text NOT NULL,
  `link` text NOT NULL,
  `d_date` varchar(50) NOT NULL,
  `d_time` varchar(50) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_country_offer`
--

INSERT INTO `home_country_offer` (`id`, `country_image`, `country_name`, `details`, `link`, `d_date`, `d_time`, `status`) VALUES
(13, '2960e300ac863ee07694bc57026aaf2a.jpg', 'AUSTRALIA', 'Australian Horizons, Your Journey: Student and Work Visas Tailored for Success and Opportunity !', 'http://globalconnex.com.au/demo/web/country_australia', '2023-10-16', '17:40:07', 1),
(15, '240ec9ebd1bb822e81a029d4a21274e6.jpg', 'NEW ZEALAND', 'Elevate Your Future: New Zealand Student and Work Visas – Gateway to Excellence and Endless Possibilities!', 'http://globalconnex.com.au/demo/web/country_newzealand', '2023-10-16', '17:43:10', 1),
(16, 'd7d61219bb6b5076ad7a06251d765437.jpg', 'CANADA ', 'Empowering Dreams, Embracing Diversity: Canada Student and Work Visas – Where Opportunities Meet Ambition!', 'http://globalconnex.com.au/demo/web/country_canada', '2023-10-16', '17:46:09', 1),
(17, '0939a1a49446d536bc9e5ac0adab4511.png', 'SWEDEN', 'Innovate Your Future: Sweden Student and Work Visas – Where Knowledge Meets Opportunity!', 'http://globalconnex.com.au/demo/web/country_sweden', '2023-10-16', '17:48:12', 1),
(18, '25b854764ac39e46c7790b26d6788fa3.png', 'ITALY', 'Crafting Dreams, Shaping Futures: Italy Student and Work Visas – Your Passport to Art, Culture, and Career Success!', '', '2023-10-16', '17:54:48', 1),
(19, 'a085ca979460df5ec8f8d88ec245ae87.jpg', 'MALAYSIA', 'Malaysia Awaits, Your Future Begins: Student and Work Visas for Education and Opportunity! <br><br>', 'http://globalconnex.com.au/demo/web/country_malaysia', '2023-10-16', '17:56:46', 1);

-- --------------------------------------------------------

--
-- Table structure for table `home_video`
--

CREATE TABLE `home_video` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `text` text NOT NULL,
  `explore_link` text NOT NULL,
  `video_link` text NOT NULL,
  `d_date` varchar(50) NOT NULL,
  `d_time` varchar(50) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_video`
--

INSERT INTO `home_video` (`id`, `image`, `text`, `explore_link`, `video_link`, `d_date`, `d_time`, `status`) VALUES
(1, 'f0425dec551c5a6870f5db6febae813a.jpg', 'We Counselling Students to Get Study Visas', 'http://www.globalconnex.com.au/demo', 'https://www.youtube.com/watch?v=Fvae8nxzVz4', '2023-10-12', '15:59:23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `immigration_service`
--

CREATE TABLE `immigration_service` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `title` text NOT NULL,
  `text` text NOT NULL,
  `d_date` varchar(50) NOT NULL,
  `d_time` varchar(50) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `immigration_service`
--

INSERT INTO `immigration_service` (`id`, `image`, `title`, `text`, `d_date`, `d_time`, `status`) VALUES
(1, 'a0cde7307b9a55139c768046361716df.jpg', 'STUDENT VISA', 'Unlock Your Future: Study Abroad with Student Visa!', '2023-10-16', '15:52:08', 1),
(2, 'cc9f40f5542114a0ee1d45bb2a0c5cbf.jpg', 'WORK PERMIT VISA', 'Your Gateway to Global Opportunities:Secure Your Work Visa Today!', '2023-10-16', '15:52:45', 1),
(3, 'e6b410679a99a834593cb5ea2b9f80a8.jpg', 'TRAINING VISA', 'Elevate Your Skills, Expand Your Horizons:Discover Training Visa Opportunities!', '2023-10-16', '15:53:21', 1),
(4, '131f5c20c164747999b20a7d6e2c0a7c.jpg', 'INVESTMENT VISA', 'Invest in Your Future, Invest in a New Home Country : Explore Investment Visa Options!', '2023-10-16', '15:54:01', 1),
(5, '5431028952d1e9ffd0430eab075831eb.jpg', 'BUSINESS VISA', 'Fuel Your Business Ambitions: Navigate New Markets with a Business Visa!', '2023-10-18', '08:22:13', 1),
(6, 'f82c37a41bb0631b5315d2ef0773f78f.jpg', 'TOURIST VISA', 'Explore, Experience, Enjoy: Your Journey Begins with a Tourist Visa!\r\nTOURIST VISA', '2023-10-18', '08:25:26', 1);

-- --------------------------------------------------------

--
-- Table structure for table `interview_matching`
--

CREATE TABLE `interview_matching` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `title` text NOT NULL,
  `text` text NOT NULL,
  `d_date` varchar(20) NOT NULL,
  `d_time` varchar(20) NOT NULL,
  `status` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interview_matching`
--

INSERT INTO `interview_matching` (`id`, `image`, `title`, `text`, `d_date`, `d_time`, `status`) VALUES
(1, '6a9fc389250c08a4549286eb2237716c.jpg', '<h6>Our Interview Matching Services</h6>', 'We understand the challenges job seekers face in finding the perfect job opportunity that aligns with their skills and aspirations. Our cutting-edge interview matching services are designed to simplify the job search process, connecting talented candidates with employers seeking their expertise. Whether you are a seasoned professional exploring new career horizons or a recent graduate eager to embark on your professional journey, we are here to help you find the ideal job match.\r\n<h6>Personalized Matching: </h6>\r\nWe utilize advanced algorithms to match your skills, qualifications, and preferences with suitable job openings. Our personalized approach ensures that every job recommendation is tailored specifically for you.<br>\r\n<h6>Comprehensive Job Listings:</h6>\r\nGain access to a vast database of job opportunities across various industries. We curate job listings from reputable companies, ensuring that you have a diverse array of options to choose from.<br>\r\n<h6>Interview Preparation:</h6>\r\nPrepare for success with our interview preparation resources. We offer valuable insights, commonly asked questions, and tips to help you shine during interviews.<br>\r\n<h6>Efficient Application Process:</h6>\r\nApply to multiple jobs seamlessly through our platform. With just a few clicks, submit  profile to employers and track  application progress effortlessly.<br>\r\n<h6>Feedback Loop:</h6>\r\nReceive feedback from employers after interviews, helping you understand your strengths and areas for improvement. We use this feedback to refine our matching algorithms, ensuring better results with each application.<br>', '2023-10-23', '10:09:23', '1');

-- --------------------------------------------------------

--
-- Table structure for table `interview_preparation`
--

CREATE TABLE `interview_preparation` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `title` text NOT NULL,
  `text` text NOT NULL,
  `d_date` varchar(20) NOT NULL,
  `d_time` varchar(20) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interview_preparation`
--

INSERT INTO `interview_preparation` (`id`, `image`, `title`, `text`, `d_date`, `d_time`, `status`) VALUES
(1, '498adce239548fb430afecc8566c23f1.jpg', 'Interview Preparation ', 'We recognize that facing an interview can be a nerve-wracking experience. That’s why we offer specialized interview preparation services designed to equip you with the confidence, skills, and knowledge needed to ace your interviews. Whether you are a recent graduate stepping into the professional world or a seasoned professional aiming for career advancement, our expert guidance will empower you to excel in any interview scenario.<br>\r\n\r\n<h6>We Offer:</h6>\r\n\r\n<h6>Mock Interviews:</h6>\r\nPractice makes perfect. Our experienced interview coaches conduct realistic mock interviews tailored to the specific job roles you are targeting. These simulations help you refine your responses, improve your communication skills, and boost your confidence.<br>\r\n\r\n<h6>Interview Techniques:</h6>\r\nMaster proven interview techniques, including effective body language, active listening, and appropriate responses to challenging questions. We teach you how to showcase your skills and experiences in the best light possible.<br>\r\n\r\n<h6>Feedback and Improvement:</h6>\r\nReceive detailed feedback on your performance during mock interviews. Our coaches provide constructive critiques and valuable insights to help you understand your strengths and areas for improvement.<br>\r\n\r\n<h6>Industry Insights: </h>\r\nStay updated with industry-specific interview trends and expectations. We provide insights into what employers in your field are looking for and how to align your responses with their expectations.<br>\r\n\r\n<h6>Common Question Preparation: </h6>\r\nPrepare for commonly asked interview questions and industry-specific queries. We will guide you on how to structure your responses and provide compelling examples to showcase your qualifications.<br>\r\n\r\n<h6>Confidence Building:</h6>\r\nOvercome interview anxiety and build your confidence. Our coaches offer strategies to manage stress, boost self-assurance, and present yourself as the best candidate for the job.<br>', '2023-10-23', '11:46:24', 5);

-- --------------------------------------------------------

--
-- Table structure for table `investment_visa`
--

CREATE TABLE `investment_visa` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `title` text NOT NULL,
  `text` text NOT NULL,
  `d_date` varchar(20) NOT NULL,
  `d_time` varchar(20) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `investment_visa`
--

INSERT INTO `investment_visa` (`id`, `image`, `title`, `text`, `d_date`, `d_time`, `status`) VALUES
(1, '695959e230d00f81f83bf0013d5cb729.jpg', '<h3>Visa Assessment: </h3>', 'Evaluate clients\' eligibility and help them understand the specific requirements of different investment visa streams in Australia.\r\n<h3>Documentation Assistance:</h3> \r\nAssist clients in preparing and organizing the necessary documents required for the visa application, such as business plans, financial statements, and proof of funds.<br>\r\n<h3>Visa Application Support:</h3> \r\nGuide clients through the application process, helping them complete the required forms accurately and submit the application to the Department of Home Affairs.<br>\r\n<h3>Business Investment Guidance:</h3> \r\nProvide advice on suitable investment options in Australia, whether it\'s starting a new business, investing in an existing business, or participating in designated investment schemes.<br>\r\n<h3>Compliance and Regulations:</h3> \r\nEnsure clients understand and comply with Australian immigration laws and regulations related to investment visas.<br>\r\n<h3>Follow-up and Communication:</h3> \r\nAct as a liaison between clients and immigration authorities, keeping clients informed about the progress of their visa applications and addressing any queries or concerns.<br>\r\n<h3>Post-Visa Settlement Services:</h3> \r\nAssist clients with settling in Australia, including finding accommodation, understanding local business practices, and connecting with relevant business networks.<br>\r\n<h3>Legal and Financial Consultation:</h3> \r\nCollaborate with legal and financial experts to provide comprehensive advice to clients regarding their investments and legal obligations in Australia.<br>', '2023-10-22', '16:48:02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mission_vision`
--

CREATE TABLE `mission_vision` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `title` text NOT NULL,
  `details` text NOT NULL,
  `d_date` varchar(20) NOT NULL,
  `d_time` varchar(20) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mission_vision`
--

INSERT INTO `mission_vision` (`id`, `image`, `title`, `details`, `d_date`, `d_time`, `status`) VALUES
(1, 'not set', '<h3>Mission:</h3>', '\r\n•	To match the student’s abilities, performance, and desires with the best possible career options.<br>\r\n•	To provide customized solutions to the students aspiring to study overseas.<br>\r\n•	Strive for the organic growth of our organization through integrity, honesty, and excellence.<br>\r\n•	To build a strong and credible relationship with the partner institutions by recognizing shared values & goals.<br>\r\n\r\n<h3>Vision:</h3>\r\nTo be the market leader in providing one-stop study abroad solutions for the students and job seeker to help they achieve their goals through proper career counseling & guidance, to add value for our partner institutions and all other stakeholders.<br>\r\n\r\n<h3>Goals:</h3>\r\nWe aim to achieve the Vision and Mission through the following objectives.<br>\r\n•	To acquire the adequate knowledge about the study destinations, the institutions, and the programs in order to provide real counseling and guidance.<br>\r\n•	To develop the necessary skills and knowledge in the field of career counseling for the key team members.<br>\r\n•	To develop the strong team spirit and provide quality solutions to the students.<br>\r\n•	To obtain the official representation from the renowned institutions and partner with them to assist the students in early days in the country.<br>\r\n•	To provide the English Language Test classes and other language courses required in order to get enrolled in the institutions.<br>\r\n•	To help the students in identifying the proper courses and selecting good institutions to fulfill their desired goals.<br>\r\n•	To guide the students through overall documentation, application process, visa lodgment, interview and pre-departure briefings.<br>\r\n•	To connect the old students with the new students in order to assist the new ones in finding accommodation, job search, and other assistance.<br>\r\n•	To get the feedback from the students in order to improve our services in future and make it better for the future students. \r\n', '2023-10-23', '10:59:13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mobi_traffic`
--

CREATE TABLE `mobi_traffic` (
  `id` int(11) NOT NULL,
  `msisdn` varchar(20) DEFAULT NULL,
  `sign_value` text NOT NULL,
  `click_value` text NOT NULL,
  `d_date` varchar(20) NOT NULL,
  `d_time` varchar(20) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobi_traffic`
--

INSERT INTO `mobi_traffic` (`id`, `msisdn`, `sign_value`, `click_value`, `d_date`, `d_time`, `status`) VALUES
(1, 'null', 'xossbbb3761ec36eb45e72ed5c0143bdfd5b', 'tes', '2024-02-18', '20:00:25', 1),
(2, 'null', 'xossbbb3761ec36eb45e72ed5c0143bdfd5b', 'te', '2024-02-18', '20:00:25', 1),
(3, 'null', 'xossbbb3761ec36eb45e72ed5c0143bdfd5b', 'test', '2024-02-18', '20:00:25', 1),
(4, 'null', 'xossbbb3761ec36eb45e72ed5c0143bdfd5b', 'testa', '2024-02-18', '20:00:27', 1),
(5, 'null', 'xossbbb3761ec36eb45e72ed5c0143bdfd5b', 'testai', '2024-02-18', '20:00:27', 1),
(6, 'null', 'xossbbb3761ec36eb45e72ed5c0143bdfd5b', 'testairt', '2024-02-18', '20:00:28', 1),
(7, 'null', 'xossbbb3761ec36eb45e72ed5c0143bdfd5b', 'testair', '2024-02-18', '20:00:28', 1),
(8, 'null', 'xossbbb3761ec36eb45e72ed5c0143bdfd5b', 'testairte', '2024-02-18', '20:00:28', 1),
(9, 'null', 'xossbbb3761ec36eb45e72ed5c0143bdfd5b', 'testairtel', '2024-02-18', '20:00:29', 1),
(10, 'null', 'xossbbb3761ec36eb45e72ed5c0143bdfd5b', 'testairtel', '2024-02-18', '20:01:03', 1);

-- --------------------------------------------------------

--
-- Table structure for table `resume_building`
--

CREATE TABLE `resume_building` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `title` text NOT NULL,
  `text` text NOT NULL,
  `d_date` varchar(20) NOT NULL,
  `d_time` varchar(20) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resume_building`
--

INSERT INTO `resume_building` (`id`, `image`, `title`, `text`, `d_date`, `d_time`, `status`) VALUES
(1, '73207821d4fd34ffb60bdb90f6606548.jpg', '<h6>Resume Building</h6>', 'We understand the importance of a well-crafted resume in today’s competitive job market. Our expert resume-building services are designed to help individuals present their skills, qualifications, and experiences in the best light possible. Whether you are a seasoned professional looking to advance your career, a recent graduate entering the job market, or an individual seeking employment opportunities abroad, we are here to assist you.<br>\r\n\r\n<h6>International Expertise:</h6> \r\nIf you are seeking employment opportunities abroad, we specialize in creating resumes that meet the standards and expectations of international employers and immigration authorities.<br>', '2023-10-22', '20:04:43', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_assessment_request`
--

CREATE TABLE `student_assessment_request` (
  `id` int(11) NOT NULL,
  `user_basic_id` int(50) DEFAULT NULL,
  `fullname` text NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact_address` text NOT NULL,
  `birth_date` varchar(50) NOT NULL,
  `ielts_score` varchar(50) NOT NULL,
  `education` text NOT NULL,
  `finished_year` text NOT NULL,
  `result` varchar(50) NOT NULL,
  `institution` varchar(50) NOT NULL,
  `student_visa_country` varchar(50) NOT NULL,
  `applying_from_name` varchar(50) NOT NULL,
  `program_enroll` varchar(50) NOT NULL,
  `which_session` varchar(50) NOT NULL,
  `passport_have` varchar(20) NOT NULL,
  `martial_status` varchar(20) NOT NULL,
  `spouse_name` text NOT NULL,
  `spouse_age` varchar(10) NOT NULL,
  `spouse_education` text NOT NULL,
  `spouse_passport` varchar(20) NOT NULL,
  `passport_expiry` varchar(20) NOT NULL,
  `children_number` varchar(10) NOT NULL,
  `children_age` varchar(50) NOT NULL,
  `children_birth` varchar(20) NOT NULL,
  `children_passport` varchar(20) NOT NULL,
  `d_date` varchar(10) NOT NULL,
  `d_time` varchar(10) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_assessment_request`
--

INSERT INTO `student_assessment_request` (`id`, `user_basic_id`, `fullname`, `phone_number`, `email`, `contact_address`, `birth_date`, `ielts_score`, `education`, `finished_year`, `result`, `institution`, `student_visa_country`, `applying_from_name`, `program_enroll`, `which_session`, `passport_have`, `martial_status`, `spouse_name`, `spouse_age`, `spouse_education`, `spouse_passport`, `passport_expiry`, `children_number`, `children_age`, `children_birth`, `children_passport`, `d_date`, `d_time`, `status`) VALUES
(3, 7, 'Shahidur Rahman', '01644805494', 'mdsurname@gmail.com', 'House #6, Road #2/b, Block #J, Baridhara, Dhaka', '1999-02-03', '5.5', 'Honors', '2024-06-03', '3.50', 'CCCN', 'Australia', 'Singapore', 'Diploma', 'January to February', 'Yes', 'Single', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '2024-06-03', '14:33:03', 1),
(4, 9, 'Ashish', '01639206842', 'ashishfouzder@gmail.com', 'Keshabpur, Jessore', '1986-06-06', '7.0', 'Masters', '2010-06-07', 'GPA 3.60', 'IST', 'Australia', 'Bangladesh', 'Masters', 'January to February', 'Yes', 'Married', 'Tanusree Rapthan', '30', 'Graguate', 'Yes', '2024-06-07', '1', '8', '2024-06-14', 'Yes', '2024-06-15', '01:57:51', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_visa`
--

CREATE TABLE `student_visa` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `title` text NOT NULL,
  `text` text NOT NULL,
  `d_date` varchar(20) NOT NULL,
  `d_time` varchar(20) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_visa`
--

INSERT INTO `student_visa` (`id`, `image`, `title`, `text`, `d_date`, `d_time`, `status`) VALUES
(1, '45c125c55310d146b816390416c2b662.jpg', 'Research and Choose a Course/Institution:', '1. We are researching universities or colleges that offer courses of your interest.<br>\r\n2. We ensure that the institution is recognized and has a good reputation.<br>\r\n\r\n<h6>Check Visa Requirements :</h6>\r\n1. Visit the official website of the country\'s embassy or consulate to understand the visa requirements. <br>\r\n2. Typically, you will need an acceptance letter from an educational institution, proof of financial stability, and sometimes proof of language proficiency (like IELTS or TOEFL scores). <br>\r\n\r\n<h6>Apply to Educational Institutions:</h6>\r\n1. Prepare and submit applications to the selected institutions.<br>\r\n2. Await acceptance letters. Once accepted, you will receive the letter of acceptance required for the visa application.<br>\r\n\r\n<h6>Financial Proof:</h6>\r\nProvide evidence of funds to cover tuition fees, living expenses, and other costs. This could be in the form of bank statements, affidavits, or scholarship letters.<br>\r\n\r\n<h6>Health Insurance:</h6>\r\nSome countries require proof of health insurance coverage. We help in preparing health insurance plans.<br>\r\n\r\n<h6>Complete Visa Application:</h6>\r\n1. Fill out the visa application form accurately.<br>\r\n2. Pay the application fee, if applicable.<br>\r\n\r\n<h6>Attend an interview (if required):</h6>\r\nSome countries require a visa interview. Prepare for possible questions about your course, institution, and future plans.<br>\r\n\r\n', '2023-10-19', '15:47:59', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_visa_attachment`
--

CREATE TABLE `student_visa_attachment` (
  `id` int(11) NOT NULL,
  `user_basic_id` int(50) NOT NULL,
  `cover_letter` text DEFAULT NULL,
  `cv` text DEFAULT NULL,
  `job_ex_letter` text DEFAULT NULL,
  `employment_letter` text DEFAULT NULL,
  `ielts_pte_certificate` text DEFAULT NULL,
  `masters_certificate` text DEFAULT NULL,
  `masters_mark_sheet` text DEFAULT NULL,
  `graduate_certificate` text DEFAULT NULL,
  `graduate_mark_sheet` text DEFAULT NULL,
  `diploma_certificate` text DEFAULT NULL,
  `diploma_mark_sheet` text DEFAULT NULL,
  `skilled_certificate` text DEFAULT NULL,
  `hsc_certificate` text DEFAULT NULL,
  `hsc_mark_sheet` text DEFAULT NULL,
  `ssc_certificate` text DEFAULT NULL,
  `ssc_mark_sheet` text DEFAULT NULL,
  `passport_copy` text DEFAULT NULL,
  `birth_certificate` text DEFAULT NULL,
  `police_clearance_ov` text DEFAULT NULL,
  `police_clearance_bd` text DEFAULT NULL,
  `covid_certificate_ov` text DEFAULT NULL,
  `covid_certificate_bd` text DEFAULT NULL,
  `student_visa_country` text NOT NULL,
  `d_date` varchar(20) NOT NULL,
  `d_time` varchar(20) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_visa_attachment`
--

INSERT INTO `student_visa_attachment` (`id`, `user_basic_id`, `cover_letter`, `cv`, `job_ex_letter`, `employment_letter`, `ielts_pte_certificate`, `masters_certificate`, `masters_mark_sheet`, `graduate_certificate`, `graduate_mark_sheet`, `diploma_certificate`, `diploma_mark_sheet`, `skilled_certificate`, `hsc_certificate`, `hsc_mark_sheet`, `ssc_certificate`, `ssc_mark_sheet`, `passport_copy`, `birth_certificate`, `police_clearance_ov`, `police_clearance_bd`, `covid_certificate_ov`, `covid_certificate_bd`, `student_visa_country`, `d_date`, `d_time`, `status`) VALUES
(1, 9, 'CoverLetters.pdf', 'cv.jpg', 'JobExperienceLetter.jpg', 'EmploymentLetter.jpg', 'download.jpg', 'word.docx', 'cv-4074274_640.png', '', '', '', '', 'download.jpg', 'cv.jpg', 'download.jpg', '', 'download.jpg', '', '', '', '', '', 'istockphoto-956411948-1024x1024.jpg', 'Australia', '2024-06-18', '13:22:24', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tourist_visa`
--

CREATE TABLE `tourist_visa` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `title` text NOT NULL,
  `text` text NOT NULL,
  `d_date` varchar(20) NOT NULL,
  `d_time` varchar(20) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tourist_visa`
--

INSERT INTO `tourist_visa` (`id`, `image`, `title`, `text`, `d_date`, `d_time`, `status`) VALUES
(1, '62a7d5825816c99ff7ad101031f1c0f4.jpg', 'Visa Consultation:', 'Providing advice and guidance on the tourist visa application process, including required documents and procedures.<br>\r\n\r\n<h6>Document Verification:</h6>\r\nReviewing and verifying applicant\'s documents to ensure they meet the requirements of the destination country\'s immigration authorities.<br>\r\n\r\n<h6>Application Assistance:</h6>\r\nAssisting with completing the visa application form accurately and ensuring all necessary information is provided.<br>\r\n\r\n<h6>Document Preparation: </h6>\r\nHelping applicants gather and organize all required documents, such as travel itineraries, hotel reservations, proof of financial means, and travel insurance.<br>\r\n\r\n<h6>Submission Services:</h6>\r\nSubmitting the visa application and supporting documents to the relevant immigration office or consulate on behalf of the applicant.<br>\r\n\r\n<h6>Application Tracking: </h6>\r\nKeeping track of the application\'s progress and informing the applicant about any updates or additional requirements from immigration authorities.<br>\r\n\r\n<h6>Interview Preparation:</h6>\r\nProviding guidance and tips on preparing for visa interviews, if required by the destination country.<br>\r\n\r\n<h6>Follow-Up with Authorities:</h6>\r\nCommunicating with immigration authorities to address any concerns or additional document requests promptly.<br>\r\n\r\n<h6>Travel Arrangements:</h6>\r\nOffering assistance with travel arrangements, including flight bookings, hotel accommodations, and travel insurance, to ensure a smooth travel experience.<br>', '2023-10-22', '18:02:21', 1);

-- --------------------------------------------------------

--
-- Table structure for table `training_visa`
--

CREATE TABLE `training_visa` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `title` text NOT NULL,
  `text` text NOT NULL,
  `d_date` varchar(20) NOT NULL,
  `d_time` varchar(20) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `training_visa`
--

INSERT INTO `training_visa` (`id`, `image`, `title`, `text`, `d_date`, `d_time`, `status`) VALUES
(1, 'c854a414f92b9b3ce069197d9997ed9e.jpeg', 'Training Program ', 'We specialize in providing expert guidance and support for individuals seeking training visas abroad. Our dedicated team of experienced professionals is well-versed in the intricacies of visa applications and can assist you every step of the way. An overseas training visa is a specialized visa category designed for individuals who wish to undergo training programs abroad. This type of visa allows applicants to receive training in a foreign country, enhancing their skills and knowledge in a specific field. The duration of the visa and the eligibility criteria vary from one country to another, so it\'s essential to research and understand the specific requirements of the country you are interested in.<br>\r\n\r\n<h6>Host Organization:</h6>\r\nWe have a long-standing relationship with training program institutes of various countries, where I do my training program visa. We offer applicant programs that are internationally recognized and respected.<br>\r\n\r\n<h6>Check Visa Eligibility:</h6>\r\nWe check the eligibility criteria for training visas in the country where the training program is located. Each country has different requirements.<br>\r\n\r\n<h6>Application for training program:</h6>\r\nApply and secure an internship offer from a recognized organization in the training program. All necessary documentation is completed and given to applicants, such as an acceptance letter or training contract.<br>\r\n\r\n<h6>Prepare Required Documents:</h6>\r\nGather all necessary documents, including the acceptance letter, proof of financial support, proof of accommodation, and travel insurance. Prepare any other documents required by the host country\'s immigration authorities<br>\r\n\r\n<h6>Visa Application:</h6>\r\nComplete the training visa application form correctly and pay the required visa application fee if applicable.<br>', '2023-10-22', '16:48:02', 5);

-- --------------------------------------------------------

--
-- Table structure for table `user_basic`
--

CREATE TABLE `user_basic` (
  `id` int(11) NOT NULL,
  `user_name` varchar(120) NOT NULL,
  `user_password` text NOT NULL,
  `user_type` varchar(120) NOT NULL,
  `full_name` text NOT NULL,
  `user_image` text DEFAULT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_basic`
--

INSERT INTO `user_basic` (`id`, `user_name`, `user_password`, `user_type`, `full_name`, `user_image`, `status`) VALUES
(4, 'admin', '25d55ad283aa400af464c76d713c07ad', 'admin', 'Mates Admin', NULL, 1),
(7, 'mdsurname@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'user', 'Md Shahidur Rahman', 'user.png', 1),
(8, 'd6608284@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'user', 'Pulok', 'user.png', 1),
(9, 'ashishfouzder@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'user', 'Ashish', 'user.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_notifications`
--

CREATE TABLE `user_notifications` (
  `id` int(11) NOT NULL,
  `user_basic_id` int(50) NOT NULL,
  `notification_title` text NOT NULL,
  `notification_text` text NOT NULL,
  `d_date` varchar(20) NOT NULL,
  `d_time` varchar(20) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_notifications`
--

INSERT INTO `user_notifications` (`id`, `user_basic_id`, `notification_title`, `notification_text`, `d_date`, `d_time`, `status`) VALUES
(1, 9, 'Welcome To Global Connex', 'Congratulations Ashish you are eligible for Australia student visa. Click following link for attached your necessary documents', '2024-06-07', '02:17:04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `visa_australia`
--

CREATE TABLE `visa_australia` (
  `id` int(11) NOT NULL,
  `visa_category_id` int(120) NOT NULL,
  `title` text NOT NULL,
  `details` text NOT NULL,
  `hrflink` text NOT NULL,
  `link` text NOT NULL,
  `d_date` varchar(20) NOT NULL,
  `d_time` varchar(20) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visa_australia`
--

INSERT INTO `visa_australia` (`id`, `visa_category_id`, `title`, `details`, `hrflink`, `link`, `d_date`, `d_time`, `status`) VALUES
(1, 1, 'Student Visa (Subclass 500)', 'The Australia Student Visa Subclass 500 is a visa option designed for international students who want to study in Australia. This visa allows students to enroll in a course of study at an Australian educational institution, participate in an eligible course of study, and stay in Australia for the duration of their course. ', 'https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/student-500', 'https://globalconnex.com.au/web/web/student_assessment', '2023-10-30', '15:24:30', 1),
(2, 1, 'Student Guardian Visa (Subclass 590)', 'The Australia Student Guardian Visa Subclass 590 is a visa designed for parents or legal guardians of international students studying in Australia. This visa allows parents or guardians to accompany their children who are studying in Australia on a student visa.', 'https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/student-590', 'http://globalconnex.com.au/web/web/guardian_visa_assessment', '2023-10-30', '16:31:24', 1),
(3, 1, 'Training Visa (Subclass 407)', 'The Training Visa Subclass 407 is designed for individuals who want to undertake occupational training in Australia. This training is usually provided by an approved sponsor to enhance the participant\'s skills and knowledge in their field.', 'https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/training-407', 'http://globalconnex.com.au/demo/web/student_assessment', '2023-10-30', '16:31:58', 1),
(4, 2, 'Employer Nomination Scheme visa (Subclass 186)', 'The Australia Employer Nomination Scheme (ENS) Visa Subclass 186 is a permanent residency visa designed for skilled workers who have a nominating employer in Australia. ', 'https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/employer-nomination-scheme-186/direct-entry-stream', 'http://globalconnex.com.au/demo/web/student_assessment', '2023-10-30', '16:34:13', 1),
(6, 2, 'Skilled Nominated visa (Subclass 190)', 'The Australia Skilled Nominated Visa (Subclass 190) is a permanent residency visa for skilled workers who are nominated by a state or territory government in Australia. To apply for the Subclass 190 visa, applicants must be nominated by an Australian state or territory government agency.', 'https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/skilled-nominated-190', 'http://globalconnex.com.au/demo/web/student_assessment', '2023-10-30', '16:36:03', 1),
(7, 2, 'Temporary Short Stay Work  visa (Subclass 400)', 'The Subclass 400 visa is designed for individuals who are invited to Australia for short-term, specialized work purposes such as participating in conferences, seminars, or short-term projects. It is also suitable for those undertaking non-ongoing film and television productions.', 'https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/temporary-work-400', 'http://globalconnex.com.au/demo/web/student_assessment', '2023-11-04', '18:26:41', 1),
(8, 2, 'Temporary Skill Shortage visa (Subclass 482)', 'The Australia Temporary Skill Shortage (TSS) Visa, Subclass 482, allows skilled workers to temporarily work in Australia. To apply for the TSS Visa, individuals must have a job offer from an Australian employer who is approved as a sponsor.', 'https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/temporary-skill-shortage-482/short-term-stream', 'http://globalconnex.com.au/demo/web/student_assessment', '2023-11-04', '18:53:47', 1),
(9, 2, 'Skilled Work Regional Provisional visa (Subclass 491)', 'The Australia Skilled Work Regional (Provisional) Visa, Subclass 491, is a points-based visa designed for skilled workers who want to live and work in regional areas of Australia. To apply for the Subclass 491 visa, applicants must be nominated by a state or territory government agency or sponsored by an eligible family member residing in a designated regional area of Australia.', 'immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/skilled-work-regional-provisional-491/application', 'http://globalconnex.com.au/demo/web/student_assessment', '2023-11-04', '19:10:57', 1),
(10, 5, 'Skilled independent visa (Subclass 189)', 'The Australia Skilled Independent Visa (Subclass 189) is a permanent residency visa designed for skilled workers who do not have a sponsor in Australia. Applicants are assessed based on a points system that considers factors such as age, English language proficiency, work experience, education, and other relevant skills.', 'https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/skilled-independent-189/points-tested', 'http://globalconnex.com.au/demo/web/student_assessment', '2023-11-04', '19:29:36', 1),
(11, 3, 'Visitor visa (Subclass 600)', 'The Australia Visitor Visa, Subclass 600, is a temporary visa that allows individuals to visit Australia for tourism, family visits, business meetings, or other short-term purposes. Here are the key points about the Subclass 600 visa:', 'https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/visitor-600/tourist-stream-onshore', 'http://globalconnex.com.au/demo/web/student_assessment', '2023-11-04', '19:33:04', 1),
(12, 3, 'Business Visitor stream (Subclass 600)', 'The Business Visitor stream allows individuals to visit Australia for short-term business activities such as attending meetings, conferences, negotiations, or exploratory business visits.', 'https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/visitor-600/business-visitor-stream', 'http://globalconnex.com.au/demo/web/student_assessment', '2023-11-04', '19:35:27', 1),
(13, 3, 'Work and Holiday (Subclass 462)', 'The Australia Work and Holiday Visa (Subclass 462) is designed for young adults aged 18 to 30 (or 18 to 35, depending on the country of origin) who want to travel, work, and holiday in Australia.Applicants must be citizens of eligible countries with reciprocal arrangements with Australia. The age limit varies based on the applicant\'s country of origin. ', 'https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/work-holiday-462/first-work-holiday-462', 'http://globalconnex.com.au/demo/web/student_assessment', '2023-11-04', '19:38:22', 1),
(14, 3, 'Working Holiday visa (Subclass 417)', 'The Australia Working Holiday Visa (Subclass 417) is a temporary visa designed for young adults aged 18 to 30 (or 18 to 35 for Canadian, French, and Irish citizens) who want to work and travel in Australia for up to 12 months.Applicants must be citizens of eligible countries with reciprocal arrangements with Australia. The age limit varies based on the applicant\'s country of origin.', 'https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/work-holiday-417/first-working-holiday-417', 'http://globalconnex.com.au/demo/web/student_assessment', '2023-11-04', '19:40:35', 1),
(15, 4, 'Business Innovation and Investment (Permanent) Visa (Subclass 888)', 'This visa is for individuals who have held a designated investment or business innovation and investment provisional visa and wish to continue their business or investment activity in Australia.\r\n\r\n', 'https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/business-innovation-and-investment-888', 'http://globalconnex.com.au/demo/web/student_assessment', '2023-11-04', '19:43:50', 1),
(16, 4, 'Business Innovation and Investment (Provisional) Visa (Subclass 188)', 'This visa has several streams, including Business Innovation, Investor, Entrepreneur, and Significant Investor streams, catering to different investment and business scenarios.', 'https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/business-innovation-and-investment-188/business-innovation-extension-stream', 'http://globalconnex.com.au/demo/web/student_assessment', '2023-11-04', '19:44:54', 1),
(17, 4, 'Premium Investor Visa (PIV)', 'This is an invitation-only visa for individuals who are willing to invest at least AUD 15 million in Australia.', 'https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/business-innovation-and-investment-188/premium-investor', 'http://globalconnex.com.au/demo/web/student_assessment', '2023-11-04', '19:46:44', 1),
(18, 4, 'Business Talent (Permanent) Visa (Subclass 132)', 'This visa is for high-caliber business owners or entrepreneurs who are nominated by an Australian state or territory government.', 'https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/business-talent-permanent-132', 'http://globalconnex.com.au/demo/web/student_assessment', '2023-11-04', '19:47:38', 1),
(19, 6, 'Temporary Graduate Visa (Subclass 476)', 'The Australia Temporary Graduate Visa (Subclass 476) is a work visa specifically designed for recent engineering graduates from recognized institutions around the world. The Subclass 476 visa allows you to live, work, and study in Australia for up to 18 months.', 'https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/skilled-recognition-graduate-476', 'http://globalconnex.com.au/demo/web/student_assessment', '2023-11-04', '19:51:05', 1);

-- --------------------------------------------------------

--
-- Table structure for table `visa_canada`
--

CREATE TABLE `visa_canada` (
  `id` int(11) NOT NULL,
  `visa_category_id` int(120) NOT NULL,
  `title` text NOT NULL,
  `details` text NOT NULL,
  `hrflink` text NOT NULL,
  `link` text NOT NULL,
  `d_date` varchar(20) NOT NULL,
  `d_time` varchar(20) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visa_canada`
--

INSERT INTO `visa_canada` (`id`, `visa_category_id`, `title`, `details`, `hrflink`, `link`, `d_date`, `d_time`, `status`) VALUES
(2, 15, 'Study Permit', 'Get your study permit faster through the Student Direct Stream\r\n\r\nIf you’re a legal resident of certain countries, you may be able to get your study permit faster by applying online through the Student Direct Stream.', 'https://ircc.canada.ca/english/information/applications/student.asp', 'http://globalconnex.com.au/demo/web/student_assessment', '2023-11-08', '12:42:50', 1),
(3, 15, 'Language School Study Permit', 'International students have many options when it comes to learning languages in Canada. You can study English or French while working in Canada or take language courses that help prepare you to enter a Canadian university or college program. You may also want to study English or French and gain a competitive advantage in your home country.', 'https://www.educanada.ca/study-plan-etudes/language-langue.aspx?lang=eng', 'https://www.educanada.ca/study-plan-etudes/language-langue.aspx?lang=eng', '2023-11-08', '12:49:44', 1),
(4, 15, 'Minor Children Study Permit', 'A foreign national coming to Canada and is accompanied by a parent with a study or work permit', 'canada.ca/en/immigration-refugees-citizenship/services/study-canada/study-permit/prepare/minor-children.html', 'http://globalconnex.com.au/demo/web/student_assessment', '2023-11-08', '13:04:02', 1),
(5, 17, 'Post-graduation work permit', 'You may be eligible for a post-graduation work permit (PGWP) if you graduated from a designated learning institution (DLI) and want to stay in Canada temporarily to work.', 'https://www.canada.ca/en/immigration-refugees-citizenship/services/study-canada/work/after-graduation/about.html', 'http://globalconnex.com.au/demo/web/student_assessment', '2023-11-08', '13:07:27', 1),
(6, 16, 'Federal Skilled Worker (Express Entry)', 'The Federal Skilled Worker Program is for skilled workers who have work experience and want to become permanent residents.', 'https://www.canada.ca/en/immigration-refugees-citizenship/services/immigrate-canada/express-entry/eligibility/federal-skilled-workers.html', 'http://globalconnex.com.au/demo/web/student_assessment', '2023-11-08', '13:11:05', 1),
(7, 16, 'Federal Skilled Trades Program (FSTP)', 'The Federal Skilled Trades Program is for skilled workers who want to become permanent residents based on being qualified in a skilled trade.', 'https://www.canada.ca/en/immigration-refugees-citizenship/services/immigrate-canada/express-entry/eligibility/skilled-trades.html', 'http://globalconnex.com.au/demo/web/student_assessment', '2023-11-08', '13:13:40', 1),
(8, 16, 'Quebec Skilled Worker Program (QSWP)', 'This is the application process for skilled workers who want to become permanent residents of Canada and live in Quebec.\r\nQuebec has a special agreement on immigration with the Government of Canada. The province has its own rules for choosing immigrants who will adapt well to living there.', 'https://www.canada.ca/en/immigration-refugees-citizenship/services/immigrate-canada/quebec-skilled-workers.html', 'http://globalconnex.com.au/demo/web/student_assessment', '2023-11-08', '13:15:11', 1),
(9, 16, 'Global Talent Stream', 'Global Talent Stream if you’ve been referred to the Global Talent Stream by 1 of the stream\'s designated partners and if you’re hiring an individual with unique and specialized talent.\r\n', 'https://www.canada.ca/en/employment-social-development/services/foreign-workers/global-talent/requirements.html', 'http://globalconnex.com.au/demo/web/student_assessment', '2023-11-08', '13:17:55', 1),
(10, 16, 'Temporary Foreign Worker Program (TFWP)', 'A positive LMIA will be issued by Service Canada if an assessment indicates that hiring a temporary foreign worker (TFW) will have a positive or neutral impact on the Canadian labour market. A positive LMIA must be obtained by an employer before hiring a TFW for a specific occupation.', 'https://open.canada.ca/data/en/dataset/90fed587-1364-4f33-a9ee-208181dc0b97', 'http://globalconnex.com.au/demo/web/student_assessment', '2023-11-08', '13:19:32', 1),
(11, 16, 'Open Work Permit', 'An open work permit can only be issued to a foreign national under one of the Labour Market Impact Assessment (LMIA) exemptions.', 'https://www.canada.ca/en/immigration-refugees-citizenship/corporate/publications-manuals/operational-bulletins-manuals/temporary-residents/foreign-workers/eligibility/open.html', 'http://globalconnex.com.au/demo/web/student_assessment', '2023-11-08', '13:20:54', 1),
(12, 16, 'LMIA-Exempt Work Permits', 'your employer needs a Labour Market Impact Assessment (LMIA) to support your job offer for Express Entry. Some jobs do not need an LMIA.\r\n\r\nYour employer doesn’t need an LMIA to support your job offer if:', 'https://www.canada.ca/en/immigration-refugees-citizenship/services/immigrate-canada/express-entry/documents/offer-employment/lmia-exempt.html', 'http://globalconnex.com.au/demo/web/student_assessment', '2023-11-08', '13:22:37', 1),
(13, 16, 'Agricultural Worker Programs', 'Seasonal Agricultural Worker Program\r\nIf you are hired through the Seasonal Agricultural Worker Program (SAWP), you can work for any SAWP employer in Canada.', 'https://www.canada.ca/en/immigration-refugees-citizenship/services/work-canada/permit/agricultural-workers-work-temporarily.html', 'http://globalconnex.com.au/demo/web/student_assessment', '2023-11-08', '13:24:03', 1),
(14, 17, 'Visitor Visa (Temporary Resident Visa)', 'A Temporary Resident Visa (TRV), also referred to as a visitor visa, is an official document issued by a Canadian visa office that is placed in your passport to show that you have met the requirements for admission to Canada as a temporary resident (either as a visitor, a student, or a worker).', 'https://www.canada.ca/en/immigration-refugees-citizenship/services/application/application-forms-guides/guide-5256-applying-visitor-visa-temporary-resident-visa.html', 'http://globalconnex.com.au/demo/web/student_assessment', '2023-11-08', '13:56:58', 1),
(15, 17, 'Electronic Travel Authorization (eTA)', 'To apply, you must have a valid passport, a credit or a debit card and an email address, and you must answer a few questions in the online application.', 'https://www.canada.ca/en/immigration-refugees-citizenship/services/visit-canada/eta.html', 'http://globalconnex.com.au/demo/web/student_assessment', '2023-11-08', '13:59:03', 1),
(16, 17, 'Super Visa', 'If you don’t need a visitor visa to enter Canada, you can still get a super visa to stay in Canada for 5 years. If we approve your application, we’ll issue you a letter to give to a border services officer when you arrive in Canada.\r\n', 'https://www.canada.ca/en/immigration-refugees-citizenship/services/visit-canada/parent-grandparent-super-visa/eligibility.html', 'http://globalconnex.com.au/demo/web/student_assessment', '2023-11-08', '14:02:24', 1),
(17, 17, 'Business Visitor Visa', 'Business visitors are persons who stay in Canada for a few days or a few weeks to attend meetings or an event, and can stay for up to 6 months.', 'https://www.canada.ca/en/immigration-refugees-citizenship/services/visit-canada/business/visitors-events-conferences.html', 'http://globalconnex.com.au/demo/web/student_assessment', '2023-11-08', '14:04:12', 1),
(18, 17, 'Visiting for Study or Temporary Work', 'You can only apply for a visitor visa from inside Canada if you meet all of these criteria:', 'https://www.canada.ca/en/immigration-refugees-citizenship/services/visit-canada/apply-new-temporary-resident-visa-within-canada.html', 'http://globalconnex.com.au/demo/web/student_assessment', '2023-11-08', '14:06:11', 1),
(19, 17, 'Temporary Resident Permit (TRP)', 'To be eligible for a temporary resident permit, your need to enter or stay in Canada must outweigh the health or safety risks to Canadian society, as determined by an immigration or a border services officer. Even if the reason you’re inadmissible seems minor, you must demonstrate that your visit is justified.', 'https://www.canada.ca/en/immigration-refugees-citizenship/services/immigrate-canada/inadmissibility/temporary-resident-permits.html', 'http://globalconnex.com.au/demo/web/student_assessment', '2023-11-08', '14:07:36', 1),
(20, 18, 'Application for Permanent Residence – Business Immigration Program ', 'Canada welcomes successful business people who are seeking new opportunities and challenges. The Business Immigration Program is designed to encourage and facilitate the admission of these individuals. Both the federal and provincial/territorial governments welcome business immigrants and offer services to help immigrants start a business and settle in Canada.', 'https://www.canada.ca/en/immigration-refugees-citizenship/services/application/application-forms-guides/guide-5759-application-permanent-residence-business-immigration-program-start-business-class.html', 'http://globalconnex.com.au/demo/web/student_assessment', '2023-11-08', '14:13:40', 1),
(21, 18, 'Start-up visa', 'If you already applied for permanent residence through the Start-Up Visa Program (SUV), you might also be able to get an optional work permit. This would let you do the work to start your business while we process your start-up visa application.', 'https://www.canada.ca/en/immigration-refugees-citizenship/services/immigrate-canada/start-visa/work-permits.html', 'http://globalconnex.com.au/demo/web/student_assessment', '2023-11-08', '14:15:35', 1);

-- --------------------------------------------------------

--
-- Table structure for table `visa_category`
--

CREATE TABLE `visa_category` (
  `id` int(11) NOT NULL,
  `category_name` text NOT NULL,
  `country` varchar(50) NOT NULL,
  `d_date` varchar(20) NOT NULL,
  `d_time` varchar(20) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visa_category`
--

INSERT INTO `visa_category` (`id`, `category_name`, `country`, `d_date`, `d_time`, `status`) VALUES
(1, 'Studying and Training Visa', 'Australia', '2023-10-30', '12:37:29', 1),
(2, 'Work and Skills Visa', 'Australia', '2023-10-30', '15:17:56', 1),
(3, 'Visitor Visa', 'Australia', '2023-11-04', '19:21:30', 1),
(4, 'Investor Visa', 'Australia', '2023-11-04', '19:22:06', 1),
(5, 'PR Visa', 'Australia', '2023-11-04', '19:22:42', 1),
(6, 'Job Seeker Visa', 'Australia', '2023-11-04', '19:23:15', 1),
(11, 'Studying and Training Visa', 'NewZealand', '2023-11-08', '10:51:27', 1),
(12, 'Work and Skills Visa', 'NewZealand', '2023-11-08', '11:00:28', 1),
(13, 'Visitor Visa', 'NewZealand', '2023-11-08', '11:00:46', 1),
(14, 'Investor Visa', 'NewZealand', '2023-11-08', '11:01:21', 1),
(15, 'Studying and Training Visa', 'Canada', '2023-11-08', '11:11:10', 1),
(16, 'Work and Skills Visa', 'Canada', '2023-11-08', '11:11:52', 1),
(17, 'Visitor Visa', 'Canada', '2023-11-08', '11:12:12', 1),
(18, 'Investor Visa', 'Canada', '2023-11-08', '11:12:46', 1),
(19, 'Studying and Training Visa', 'Sweden', '2023-11-08', '11:13:27', 1),
(20, 'Work and Skills Visa', 'Sweden', '2023-11-08', '11:13:51', 1),
(21, 'Visitor Visa', 'Sweden', '2023-11-08', '11:14:23', 1),
(22, 'Investor Visa', 'Sweden', '2023-11-08', '11:14:38', 1),
(23, 'Studying and Training Visa', 'Malaysia', '2023-11-08', '11:15:16', 1),
(24, 'Work and Skills Visa', 'Malaysia', '2023-11-08', '11:15:41', 1),
(25, 'Visitor Visa', 'Malaysia', '2023-11-08', '11:16:10', 1),
(26, 'Investor Visa', 'Malaysia', '2023-11-08', '11:16:27', 1);

-- --------------------------------------------------------

--
-- Table structure for table `visa_malaysia`
--

CREATE TABLE `visa_malaysia` (
  `id` int(11) NOT NULL,
  `visa_category_id` int(120) NOT NULL,
  `title` text NOT NULL,
  `details` text NOT NULL,
  `hrflink` text NOT NULL,
  `link` text NOT NULL,
  `d_date` varchar(20) NOT NULL,
  `d_time` varchar(20) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `visa_newzealand`
--

CREATE TABLE `visa_newzealand` (
  `id` int(11) NOT NULL,
  `visa_category_id` int(120) NOT NULL,
  `title` text NOT NULL,
  `details` text NOT NULL,
  `hrflink` text NOT NULL,
  `link` text NOT NULL,
  `d_date` varchar(20) NOT NULL,
  `d_time` varchar(20) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visa_newzealand`
--

INSERT INTO `visa_newzealand` (`id`, `visa_category_id`, `title`, `details`, `hrflink`, `link`, `d_date`, `d_time`, `status`) VALUES
(2, 11, 'Fee Paying Student Visa (Student Visa - Fee Paying)', 'Apply for this visa to study full-time in New Zealand. You will need to pay the full cost of your courses and enroll with an approved education provider.', 'https://www.immigration.govt.nz/new-zealand-visas/visas/visa/full-fee-paying-student-visa', 'http://globalconnex.com.au/demo/web/assessment', '2023-11-08', '11:23:04', 1),
(3, 11, 'Pathway Student Visa', 'A Pathway Student Visa is for international students who want to study up to 3 consecutive programmers of study with approved education providers on a single visa.', 'https://www.immigration.govt.nz/assist-migrants-and-students/assist-students/student-visa-info/pathway-visas', 'http://globalconnex.com.au/demo/web/assessment', '2023-11-08', '11:26:03', 1),
(4, 11, 'Exchange Student Visa', 'If you are outside New Zealand and have been accepted into an approved student exchange scheme, apply for this visa to study full-time in New Zealand.', 'https://www.immigration.govt.nz/new-zealand-visas/visas/visa/exchange-student-visa', 'http://globalconnex.com.au/demo/web/assessment', '2023-11-08', '11:27:47', 1),
(5, 11, 'Dependent Child Student Visa', 'Apply for this visa to bring your dependent children to study at primary or secondary school in New Zealand. You must hold an appropriate work or student visa.', 'https://www.immigration.govt.nz/new-zealand-visas/visas/visa/dependent-child-student-visa', 'http://globalconnex.com.au/demo/web/assessment', '2023-11-08', '11:30:16', 1),
(6, 12, 'Post Study Work Visa', 'You can apply for this visa if you have recently finished your studies in New Zealand. It allows you to stay and work here for up to 3 years, depending on what you studied.', 'https://www.immigration.govt.nz/new-zealand-visas/visas/visa/post-study-work-visa', 'http://globalconnex.com.au/demo/web/student_assessment', '2023-11-08', '11:32:06', 1),
(7, 12, 'Post-Study Work Visa (Employer Assisted)', 'Stay for 3 years depending on your level of study and how long you studied in New Zealand. Work for any employer in any job if you have a degree level 7 or above qualification. Work in a job that is related to what you studied if your qualification is non-degree level 7 or below', 'https://www.immigration.govt.nz/opsmanual/45663.htm', 'http://globalconnex.com.au/demo/web/student_assessment', '2023-11-08', '11:35:31', 1),
(8, 11, 'Guardian of a Student  Visa', 'If you are a parent or legal guardian of a child who is in New Zealand on a student visa you can apply for this visa to live with and care for your child.', 'https://www.immigration.govt.nz/new-zealand-visas/visas/visa/parents-or-guardians-of-students-visitor-visa', 'http://globalconnex.com.au/demo/web/assessment', '2023-11-08', '11:37:00', 1),
(9, 11, 'English language Student Visa', 'For some visas, you need to speak and understand English. Find out which test results we accept, how to show your English-speaking background, and who can buy language lessons.', 'https://www.immigration.govt.nz/new-zealand-visas/preparing-a-visa-application/english-language', 'http://globalconnex.com.au/demo/web/student_assessment', '2023-11-08', '11:39:03', 1),
(10, 12, 'Skilled Migrant Category Resident Visa', 'Apply for this visa if you currently work or you have a job offer from an accredited employer, and qualify for 6 points for your skills and work in New Zealand. You submit an expression of interest (EOI). If it is accepted, we invite you to apply.', 'https://www.immigration.govt.nz/new-zealand-visas/visas/visa/skilled-migrant-category-resident-visa', 'http://globalconnex.com.au/demo/web/student_assessment', '2023-11-08', '11:41:13', 1),
(11, 12, 'Essential Skills Work Visa', 'This visa was for people who had a job offer for a role that could not be filled by New Zealanders. It closed on 4 July 2022.', 'immigration.govt.nz/new-zealand-visas/visas/visa/essential-skills-work-visa#:~:text=This%20visa%20closed%20to%20new,the%20job%20you%20are%20offered.&text=Your%20partner%20or%20dependent%20children,on%20their%20relationship%20to%20you.', 'http://globalconnex.com.au/demo/web/student_assessment', '2023-11-08', '11:42:49', 1),
(12, 12, 'Talent (Accredited Employer) Work Visa', 'his visa was for people who have a skill needed by a New Zealand accredited employer. It was replaced by the Accredited Employer Work Visa on 4 July 2022.', 'https://www.immigration.govt.nz/new-zealand-visas/visas/visa/talent-accredited-employers-work-to-residence-visa', 'http://globalconnex.com.au/demo/web/student_assessment', '2023-11-08', '11:44:13', 1),
(13, 12, 'Specific Purpose Work Visa', 'This visa allows you to come to New Zealand for a specific purpose or event. Migrants already in New Zealand who have a Recovery Visa can apply for this visa to stay for an additional 3 months.', 'https://www.immigration.govt.nz/new-zealand-visas/visas/visa/specific-purpose-or-event-work-visa', 'http://globalconnex.com.au/demo/web/student_assessment', '2023-11-08', '11:45:30', 1),
(14, 12, 'Work to Residence Visa', 'Apply for this visa if you currently work for, or have a job offer from, an accredited employer, and have worked in a Tier 2 Green List in-demand role for 24 months.', 'https://www.immigration.govt.nz/new-zealand-visas/visas/visa/work-to-residence-visa', 'http://globalconnex.com.au/demo/web/student_assessment', '2023-11-08', '11:47:08', 1),
(15, 11, 'Visitor Visa', 'People travelling on a passport from some countries must apply for a Visitor Visa to visit New Zealand. You cannot work, but you can study for up to 3 months.', 'https://www.immigration.govt.nz/new-zealand-visas/visas/visa/visitor-visa', 'http://globalconnex.com.au/demo/web/assessment', '2023-11-08', '11:50:13', 1),
(16, 13, 'Parent and Grandparent Visitor Visa', 'You can apply for this visa if you have children or grandchildren who are New Zealand citizens or residents. It allows you to travel in and out of New Zealand to visit your family.', 'https://www.immigration.govt.nz/new-zealand-visas/visas/visa/parent-and-grandparent-multiple-entry-visitor-visa', 'http://globalconnex.com.au/demo/web/student_assessment', '2023-11-08', '11:53:55', 1),
(17, 13, 'Guardian of a Student Visitor Visa', 'If you are a parent or legal guardian of a child who is in New Zealand on a student visa you can apply for this visa to live with and care for your child.', 'https://www.immigration.govt.nz/new-zealand-visas/visas/visa/parents-or-guardians-of-students-visitor-visa', 'http://globalconnex.com.au/demo/web/student_assessment', '2023-11-08', '11:54:48', 1),
(18, 13, 'Working holiday visas', 'Check the countries that have a working holiday visa agreement with New Zealand, visa eligibility, and what to do if you want to extend your working holiday visa.', 'https://www.immigration.govt.nz/new-zealand-visas/preparing-a-visa-application/working-in-nz/how-long-can-you-work-in-new-zealand-for/working-holiday-visa', 'http://globalconnex.com.au/demo/web/student_assessment', '2023-11-08', '11:56:08', 1),
(19, 13, 'Business Visitor Visa', 'Apply if you want to visit New Zealand for business reasons. You must have enough money to live on while you are here or have the financial support of your employer.', 'https://www.immigration.govt.nz/new-zealand-visas/visas/visa/business-visitors-visa', 'http://globalconnex.com.au/demo/web/student_assessment', '2023-11-08', '11:57:40', 1),
(20, 13, 'Supplementary Seasonal Employment Work Visa', 'You can apply for this visa if you are already in New Zealand on a student or visitor visa and want to do seasonal work in the horticulture or viticulture industry.', 'https://www.immigration.govt.nz/new-zealand-visas/visas/visa/supplementary-seasonal-employment-sse-work-visa', 'http://globalconnex.com.au/demo/web/student_assessment', '2023-11-08', '11:59:32', 1),
(21, 11, 'Partner of a New Zealander Visitor Visa', 'This visa allows you to visit New Zealand if you have a partner who is a New Zealand citizen or resident.', 'https://www.immigration.govt.nz/new-zealand-visas/visas/visa/partners-of-new-zealand-citizens-or-residence-class-visa-holders-visitor-visa', 'http://globalconnex.com.au/demo/web/assessment', '2023-11-08', '12:00:54', 1),
(22, 13, 'Medical Treatment Visitor Visa', 'Visit New Zealand for medical treatment or consultation. You must be able to pay for your treatment, unless it is funded under a special arrangement.', 'https://www.immigration.govt.nz/new-zealand-visas/visas/visa/medical-treatment-visitor-visa#:~:text=You%20must%20provide%3A,expected%20costs%20of%20the%20treatment', 'http://globalconnex.com.au/demo/web/student_assessment', '2023-11-08', '12:02:41', 1),
(23, 11, 'Entrepreneur Work Visa', 'Apply if you want to work in your own business in New Zealand. You must have NZD $100,000 to invest, a business plan, and able to claim 120 points on our points scale.\r\n', 'https://www.immigration.govt.nz/new-zealand-visas/visas/visa/entrepreneur-work-visa', 'http://globalconnex.com.au/demo/web/assessment', '2023-11-08', '12:05:06', 1),
(24, 11, 'Acceptable investments: Investor visas', 'If you applied for an Investor 1 or 2 Resident Visa on or before 27 July 2022 (prior to the category closure), you must invest your money in an acceptable investment.', 'https://www.immigration.govt.nz/new-zealand-visas/preparing-a-visa-application/financial-arrangements/investing-and-investment-funds/investor-categories', 'http://globalconnex.com.au/demo/web/assessment', '2023-11-08', '12:06:59', 1),
(25, 14, 'Global Impact Work Visa', 'If you are an entrepreneur or investor who has been accepted into the Edmund Hillary Fellowship you can apply for this visa to live and work in New Zealand.', 'https://www.immigration.govt.nz/new-zealand-visas/visas/visa/global-impact-work-visa', 'http://globalconnex.com.au/demo/web/student_assessment', '2023-11-08', '12:08:32', 1);

-- --------------------------------------------------------

--
-- Table structure for table `visa_sweden`
--

CREATE TABLE `visa_sweden` (
  `id` int(11) NOT NULL,
  `visa_category_id` int(120) NOT NULL,
  `title` text NOT NULL,
  `details` text NOT NULL,
  `hrflink` text NOT NULL,
  `link` text NOT NULL,
  `d_date` varchar(20) NOT NULL,
  `d_time` varchar(20) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `work_permit_visa`
--

CREATE TABLE `work_permit_visa` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `title` text NOT NULL,
  `text` text NOT NULL,
  `d_date` varchar(20) NOT NULL,
  `d_time` varchar(20) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `work_permit_visa`
--

INSERT INTO `work_permit_visa` (`id`, `image`, `title`, `text`, `d_date`, `d_time`, `status`) VALUES
(1, '04ebb7fb146a4c76eb33ad7bd9cb15be.jpg', 'Understanding Work Visa Options:', 'Different countries have different types of work visas, such as skilled worker visas, temporary work visas, and sponsorship visas. Our services help you understand the options available based on your eligibility and the country you are interested in.<br>\r\n\r\n<h6>Eligibility Assessment:</h6>\r\nThe companies we work with on work visas from different countries may assess your qualifications and work experience for a particular job. So we provide proper advice and training on the requirements you need to meet.<br>\r\n\r\n<h6>Document Preparation:</h6>\r\nWork visa applications often require extensive documentation, including proof of employment, qualifications, background checks, and sometimes health tests. We can help organize and prepare these documents properly.<br>\r\n\r\n<h6>Application Submission:</h6>\r\nWe can help you complete and submit your visa application correctly, minimizing the chances of errors that could delay the process.<br>\r\n\r\n', '2023-10-19', '16:37:37', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_message`
--
ALTER TABLE `about_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career_counseling`
--
ALTER TABLE `career_counseling`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_slider`
--
ALTER TABLE `cms_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_profile`
--
ALTER TABLE `company_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country_serve_australia`
--
ALTER TABLE `country_serve_australia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country_serve_canada`
--
ALTER TABLE `country_serve_canada`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country_serve_malaysia`
--
ALTER TABLE `country_serve_malaysia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country_serve_newzealand`
--
ALTER TABLE `country_serve_newzealand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country_serve_sweden`
--
ALTER TABLE `country_serve_sweden`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hire_staff`
--
ALTER TABLE `hire_staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hits_info`
--
ALTER TABLE `hits_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_about_company`
--
ALTER TABLE `home_about_company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_contact`
--
ALTER TABLE `home_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_country_offer`
--
ALTER TABLE `home_country_offer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_video`
--
ALTER TABLE `home_video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `immigration_service`
--
ALTER TABLE `immigration_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interview_matching`
--
ALTER TABLE `interview_matching`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interview_preparation`
--
ALTER TABLE `interview_preparation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `investment_visa`
--
ALTER TABLE `investment_visa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mission_vision`
--
ALTER TABLE `mission_vision`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobi_traffic`
--
ALTER TABLE `mobi_traffic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resume_building`
--
ALTER TABLE `resume_building`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_assessment_request`
--
ALTER TABLE `student_assessment_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_visa`
--
ALTER TABLE `student_visa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_visa_attachment`
--
ALTER TABLE `student_visa_attachment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tourist_visa`
--
ALTER TABLE `tourist_visa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `training_visa`
--
ALTER TABLE `training_visa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_basic`
--
ALTER TABLE `user_basic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_notifications`
--
ALTER TABLE `user_notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visa_australia`
--
ALTER TABLE `visa_australia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visa_canada`
--
ALTER TABLE `visa_canada`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visa_category`
--
ALTER TABLE `visa_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visa_malaysia`
--
ALTER TABLE `visa_malaysia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visa_newzealand`
--
ALTER TABLE `visa_newzealand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visa_sweden`
--
ALTER TABLE `visa_sweden`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work_permit_visa`
--
ALTER TABLE `work_permit_visa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_message`
--
ALTER TABLE `about_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `career_counseling`
--
ALTER TABLE `career_counseling`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cms_slider`
--
ALTER TABLE `cms_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `company_profile`
--
ALTER TABLE `company_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `country_serve_australia`
--
ALTER TABLE `country_serve_australia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `country_serve_canada`
--
ALTER TABLE `country_serve_canada`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `country_serve_malaysia`
--
ALTER TABLE `country_serve_malaysia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `country_serve_newzealand`
--
ALTER TABLE `country_serve_newzealand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `country_serve_sweden`
--
ALTER TABLE `country_serve_sweden`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hire_staff`
--
ALTER TABLE `hire_staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hits_info`
--
ALTER TABLE `hits_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=798;

--
-- AUTO_INCREMENT for table `home_about_company`
--
ALTER TABLE `home_about_company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_contact`
--
ALTER TABLE `home_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_country_offer`
--
ALTER TABLE `home_country_offer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `home_video`
--
ALTER TABLE `home_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `immigration_service`
--
ALTER TABLE `immigration_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `interview_matching`
--
ALTER TABLE `interview_matching`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `interview_preparation`
--
ALTER TABLE `interview_preparation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `investment_visa`
--
ALTER TABLE `investment_visa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mission_vision`
--
ALTER TABLE `mission_vision`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mobi_traffic`
--
ALTER TABLE `mobi_traffic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `resume_building`
--
ALTER TABLE `resume_building`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_assessment_request`
--
ALTER TABLE `student_assessment_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student_visa`
--
ALTER TABLE `student_visa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_visa_attachment`
--
ALTER TABLE `student_visa_attachment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tourist_visa`
--
ALTER TABLE `tourist_visa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `training_visa`
--
ALTER TABLE `training_visa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_basic`
--
ALTER TABLE `user_basic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_notifications`
--
ALTER TABLE `user_notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visa_australia`
--
ALTER TABLE `visa_australia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `visa_canada`
--
ALTER TABLE `visa_canada`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `visa_category`
--
ALTER TABLE `visa_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `visa_malaysia`
--
ALTER TABLE `visa_malaysia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `visa_newzealand`
--
ALTER TABLE `visa_newzealand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `visa_sweden`
--
ALTER TABLE `visa_sweden`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `work_permit_visa`
--
ALTER TABLE `work_permit_visa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
