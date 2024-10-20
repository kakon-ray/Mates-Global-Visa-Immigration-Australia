-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 19, 2023 at 12:26 AM
-- Server version: 10.5.22-MariaDB-cll-lve-log
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freshex1_globalc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admissionforms`
--

CREATE TABLE `admissionforms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admission_name` varchar(40) NOT NULL,
  `admission_phone` varchar(16) NOT NULL,
  `admission_email` varchar(40) NOT NULL,
  `admission_from_country` varchar(40) NOT NULL,
  `admission_study_country` varchar(40) NOT NULL,
  `admission_qualification` varchar(40) NOT NULL,
  `admision_course` varchar(40) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admissionforms`
--

INSERT INTO `admissionforms` (`id`, `admission_name`, `admission_phone`, `admission_email`, `admission_from_country`, `admission_study_country`, `admission_qualification`, `admision_course`, `created_at`, `updated_at`) VALUES
(1, 'Gulam rahman', '01868235706', 'gulamrahman37@gmail.com', 'Åland Islands', 'Algeria', 'Diploma', 'Cse', '2022-03-10 09:13:30', '2022-03-10 09:13:30'),
(2, 'Nahidul Islam', '01622960841', 'nahidulislamraju8@gmail.com', 'Albania', 'Albania', 'Diploma', 'Diploma', '2022-03-10 09:25:29', '2022-03-10 09:25:29'),
(4, 'Md Shahidur Rahman', '+8801644805494', 'mdsurname@gmail.com', 'Albania', 'Åland Islands', 'Bachelors', 'pharmacy', '2023-03-05 17:16:02', '2023-03-05 17:16:02');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contact_name` varchar(40) NOT NULL,
  `contact_phone` varchar(16) NOT NULL,
  `contact_email` varchar(40) NOT NULL,
  `contact_message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `contact_name`, `contact_phone`, `contact_email`, `contact_message`, `created_at`, `updated_at`) VALUES
(1, 'test', '1231231234', 'test2@test.com', 'asdfasdfasdf', '2020-03-06 20:57:16', '2020-03-06 20:57:16'),
(2, 'JamesSkync', '86125787698', 'coronavaccine@hotmail.com', 'COVID-19 outbreak: airplanes grounded, borders closed, businesses shut, citizens quarantined, political power seized, democracy undermined. \r\nAll this, if it is not stopped shortly, can lead to chaos and unrests. \r\nCurrently http://ST-lF.NET focus on raising awareness of the social impact that radically politicized approach to handling CoronaVirus Pandemic will have on the younger generations. \r\nYour support is needed to reduce the destructive impact the lock-down brings to bear on the younger generation. \r\nEvery 1$ makes a difference. \r\nPlease, take a moment to watch our presentation video and review our campaigns http://ST-lF.NET', '2020-04-10 22:46:11', '2020-04-10 22:46:11'),
(3, 'cVjHBwTqdG', '5293674622', 'michaelfields3590@gmail.com', 'iKJvFwWSkrplN', '2020-05-05 16:58:14', '2020-05-05 16:58:14'),
(4, 'Joshuadup', '89591715258', 'no-replysankessella@gmail.com', 'Hеllо!  globalconnex.com.au \r\n \r\nDid yоu knоw thаt it is pоssiblе tо sеnd mеssаgе аbsоlutеly lеgаlly? \r\nWе prоvidе а nеw wаy оf sеnding prоpоsаl thrоugh соntасt fоrms. Suсh fоrms аrе lосаtеd оn mаny sitеs. \r\nWhеn suсh аppеаl аrе sеnt, nо pеrsоnаl dаtа is usеd, аnd mеssаgеs аrе sеnt tо fоrms spесifiсаlly dеsignеd tо rесеivе mеssаgеs аnd аppеаls. \r\nаlsо, mеssаgеs sеnt thrоugh fееdbасk Fоrms dо nоt gеt intо spаm bесаusе suсh mеssаgеs аrе соnsidеrеd impоrtаnt. \r\nWе оffеr yоu tо tеst оur sеrviсе fоr frее. Wе will sеnd up tо 50,000 mеssаgеs fоr yоu. \r\nThе соst оf sеnding оnе milliоn mеssаgеs is 49 USD. \r\n \r\nThis оffеr is сrеаtеd аutоmаtiсаlly. Plеаsе usе thе соntасt dеtаils bеlоw tо соntасt us. \r\n \r\nContact us. \r\nTelegram - @FeedbackFormEU \r\nSkype  FeedbackForm2019 \r\nWhatsApp - +375259112693 \r\nEmail feedbackform@make-success.com', '2020-05-23 01:27:53', '2020-05-23 01:27:53'),
(5, 'eNDkdlUF', '6064169063', 'zoburke778@gmail.com', 'oHVJzxpmKwWU', '2020-06-12 17:23:05', '2020-06-12 17:23:05'),
(8, 'Mike Haig', '89944797185', 'no-reply@hilkom-digital.de', 'hi there \r\n \r\nI have just checked globalconnex.com.au for the ranking keywords and seen that your SEO metrics could use a boost. \r\n \r\nWe will improve your SEO metrics and ranks organically and safely, using only whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nPlease check our pricelist here, we offer SEO at cheap rates. \r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ \r\n \r\nStart increasing your sales and leads with us, today! \r\n \r\nregards \r\nHilkom Digital Team \r\nsupport@hilkom-digital.de', '2020-07-10 19:07:14', '2020-07-10 19:07:14'),
(9, 'Mike Wayne', '89456361834', 'no-replyHex@google.com', 'Hi! \r\nIf you want to get ahead of your competition, have a higher Domain Authority score. Its just simple as that. \r\nWith our service you get Domain Authority above 50 points in just 30 days. \r\n \r\nThis service is guaranteed \r\n \r\nFor more information, check our service here \r\nhttps://www.monkeydigital.co/Get-Guaranteed-Domain-Authority-50/ \r\n \r\nthank you \r\nMike Wayne\r\n \r\nMonkey Digital \r\nsupport@monkeydigital.co', '2020-07-18 22:12:19', '2020-07-18 22:12:19'),
(11, 'Davidnonse', '88269519625', 'topbabe30@gmail.com', 'Great discount on https://topbabestore.com to protect and keep babies safe while moms and dad\'s can go about their daily business without worrying about their babies safety. \r\nWifi/wireless baby monitors, Baby digital infrared body measurement, car electric blue bottle steriliser and a whole lot of other offers on Topbabestore.com. \r\nVisit us for all your baby needs and more. \r\nContact is info@topbabestore.com', '2020-07-20 10:36:28', '2020-07-20 10:36:28'),
(12, 'OTrdVgaqjBycv', '2970432858', 'posycin@gmail.com', 'FPKmfOjWDLkySIE', '2020-07-22 10:05:13', '2020-07-22 10:05:13'),
(15, 'Cindyfruiz', '86464721367', 'salesrep@fastypharma.com', 'US ONLINE PHARMACY - GET UP 30% AT THE CHECKOUT PAGE \r\n \r\nI just wanted to inform you that all our meds are currently in stock at Fasty Pharma \r\nhttps://www.fastypharma.com \r\n \r\nEnjoy a modern checkout experience with multiple payment and shipping methods. Our popular \r\ncategories are: \r\n- Pain Relievers \r\n- Muscle Relaxant \r\n- Anti Anxiety \r\n- Sleeping Pills \r\n- Erectile Dysfunction \r\n \r\nTake a second to visit our shelf at https://www.fastypharma.com/ \r\n \r\nYou can write to us directly via the live chat on our site, or email us at support@fastypharma.com, we \r\nare available to answer all your concerns. \r\n \r\nBest Regards, \r\n \r\nCindy | Customer Service Manager \r\n+18443008187 \r\nFastyPharma®', '2020-08-05 17:51:50', '2020-08-05 17:51:50'),
(17, 'Michel Gaston', '85499135521', 'frankegaston02@gmail.com', 'Greetings! \r\n \r\nHow are you today? Hope fine? \r\n \r\nI genuinely solicit for the assistance of a reliable and honest foreign partner that will work closely with me in a joint venture partnership. I can make funds available for investments in a joint venture partnership. Hence, I solicit for your assistance in this business partnership. \r\nIf you are interested in this lucrative business partnership, please let me know so that I will give you more details about this pending transaction. \r\n \r\nI look forward to hearing from you soon! \r\nBest Regards, \r\n \r\n \r\nFranke Michel Gaston \r\nPrincipal Partner \r\nEmail: frankegaston2@gmail.com', '2020-08-19 08:07:47', '2020-08-19 08:07:47'),
(18, 'Ripal Patel', '87736841138', 'ripalpatel06@protonmail.com', 'Hello there,I\'m 25 years old Web Designer and Developer living on Earth. \r\nIf you are looking for a Website design or Wordpress Expert, I Can! \r\nCheckout my portfolio below @ https://theripal.com/portfolio/ \r\nI believe that the world needs better freelancers that are willing to do quality work on a reliable budget. If you are looking for a Website design or WordPress expert, then I AM HERE! \r\nHave a good day! \r\nKind Regards \r\n-- \r\nRipal Patel | Website Designer \r\nw: http://www.theripal.com/ | e: ripalpatel06@protonmail.com', '2020-08-19 14:07:52', '2020-08-19 14:07:52'),
(19, 'Jimmy Scowley', '82597816989', 'jimmyscowley@gmail.com', 'Dear Sir/mdm, \r\n \r\nOur company Resinscales is looking for distributors and resellers for its unique product: ready-made tank models from the popular massively multiplayer online game - World of Tanks. \r\n \r\nSuch models are designed for fans of the game WoT and collectors of military models. \r\n \r\nWhat makes our tank models stand out? \r\n \r\n- We are focusing on tanks not manfactured by any companies, therefore we have no competitors \r\n- Accurately made in 1/35 scale \r\n- Very high accuracy of details and colors \r\n- The price of the model tank is the same as the production cost \r\n \r\nIf you are interested to be our distributor/reseller then please let us know from the contacts below. \r\n \r\nhttps://www.resinscales.com/ \r\nhttps://www.facebook.com/resinscales.models/ \r\ncontact@resinscales.com \r\n \r\nIgnore this message if it had been wrongly sent to you.', '2020-08-31 23:40:58', '2020-08-31 23:40:58'),
(20, 'Alex', '420607361995', 'nikiav6pr@gmx.com', 'Dear clients and partners, we are a development team that is now looking for companies / agencies to Incentive Traffic, or bot advertising, upon request, we will perform any complex KPIs for you, implement any number of registrations, polls, subscriptions, votes with confirmation by mail, phone, etc. ... Let\'s start a traffic simulation, with managing the session time, depth on the site, with a substitute for any source (ppc, seo, smm, sem, e-mail, etc.). Individual development of software, according to your needs - checkers, validators, mailings, etc. \r\n \r\nInteresting long-term cooperation, we will be able to sign an NDA. We work with all GEOs, and a budget of $ 1000. \r\n \r\nOur office in Prague: http://www.globaltraffic.shop/ \r\nWhatsApp \\ Viber \\ Telegram: @Sparrow_Marketing tel. +420607361995 or Skype: win.media', '2020-09-06 10:28:18', '2020-09-06 10:28:18'),
(21, 'Roberthon', '82192343821', 'atrixxtrix@gmail.com', 'Dear Sir/mdm, \r\n \r\nHow are you? \r\n \r\nWe supply Professional surveillance & medical products: \r\n \r\nMoldex, makrite and 3M N95 1870, 1860, 9502, 9501, 8210, 9105 \r\n3ply medical, KN95, FFP2, FFP3, PPDS masks \r\nFace shield/medical goggles \r\nNitrile/vinyl/Latex/PP gloves \r\nIsolation/surgical gown lvl1-4 \r\nProtective PPE/Overalls lvl1-4 \r\nIR non-contact/oral thermometers \r\nsanitizer dispenser \r\n \r\nLogitech/OEM webcam \r\nMarine underwater CCTV \r\nExplosionproof CCTV \r\n4G Solar CCTV \r\nHuman body thermal cameras \r\nIP & analog cameras for homes/industrial/commercial \r\n \r\nLet us know which products you are interested and we can send you our full pricelist. \r\n \r\nWe also welcome distributors/resellers. Our CCTV cameras are made in Taiwan. Our ip camera system is plug and play without any configuration (just scan QR code on \r\nmobile phone) and our cameras do not require any standalone power supply to work. \r\nFeel free to contact us below \r\n \r\nWhatsapp: +65 87695655 \r\nTelegram: cctv_hub \r\nSkype: cctvhub \r\nEmail: sales@thecctvhub.com \r\nW: http://www.thecctvhub.com/ \r\n \r\nIf you do not wish to receive email from us again, please let us know by replying. \r\n \r\nregards, \r\nCCTV HUB', '2020-09-06 21:32:07', '2020-09-06 21:32:07'),
(23, 'Marilynjab', '81694631379', 'contact1@theonlinepublishers.com', 'Hello, we are The Online Publishers (TOP) and want to introduce ourselves to you.  TOP is an established comprehensive global online hub.  We connect clients to expert freelancers in all facets of the world of digital marketing such as writers, journalists, bloggers, authors, advertisers, publishers, social media influencers, backlinks managers, Vloggers/video marketers and reviewers… A few of the many services we offer are content creation and placement, publishing, advertising, online translation, and social media management.  We also have two full online libraries, one of photographs and the other of eBooks and informative resources. \r\nSave money and time by using TOP services.  Rather than having to search for multiple providers of various tasks, we are a one-stop-shop.  We have all the services you will ever need right here.  For a complete list, check out our website https://www.theonlinepublishers.com \r\nTOP can help any business surge ahead of its competition and increase sales.  Join The Online Publishers today.', '2020-09-13 10:53:56', '2020-09-13 10:53:56'),
(24, 'Teresajaigh', '87736495777', 'contact2@theonlinepublishers.com', 'Grow Your Business with TOP Vlogger Experts \r\n \r\nHow would you like to have your company\'s story told in video clips?  What better way to do that than with a series of short videos?  Welcome to the world of vlogging.  Vlogging is essentially blogging, except it is in the form of videos instead of written text.  When you are a client of The Online Publishers (TOP) we can connect you with professionals who excel at this unique type of marketing.  TOP Combines Vlogging and Influencers Marketing to boost your online reputation. \r\n \r\nClients love being able to express the highlights of their company or region through videos.  A great digital marketing firm not only knows the ins and outs of creating vlogs but knows how and where to place them to gain the maximum exposure.  Allow the vlogging gurus at TOP to do these things for you. \r\n \r\nAnother key feature of vlogging that TOP is excellent at is using social media sites to boost the videos.  All exposure that your videos can obtain through social sites is great.  Our service providers can successfully accomplish this for you.  This is especially fantastic if you need to bolster your online reputation.  Vlogs are a perfect way to do that and our providers know how to get it done right.  Go online to http://www.theonlinepublishers.com/ now and ask our support team all about it.', '2020-09-22 09:53:39', '2020-09-22 09:53:39'),
(26, 'Shanehes', '84944954998', 'davidcoates671@gmail.com', 'High Net Worth private investors are preparing to seize alternative asset \r\ninvestment opportunities this year amid the economic fallout from Covid-19. \r\n \r\nSome 87 per cent of private investors are planning to maintain or increase their allocations to alternative assets over the next 12 months. \r\n \r\n80 per cent say they will consider new alternative asset investments this year. \r\nForty per cent are ready to invest immediately. \r\n \r\nJust over half (53 per cent) say they have increased their cash reserves since the start of he coronavirus. \r\nSource – Connection Capital \r\n \r\nInterested in knowing more contact us; \r\nemail: admin@abacuscapitalmgt.com \r\nWhatsApp: +44 753 7181 444', '2020-10-06 15:06:23', '2020-10-06 15:06:23'),
(28, 'Dave Stills', '82548423378', 'david@starkwoodmarketing.com', 'Hey globalconnex.com.au, \r\n \r\nCan I get you on the horn to discuss relaunching marketing? \r\n \r\nGet started on a conversion focused landing page, an automated Linkedin marketing tool, or add explainer videos to your marketing portfolio and boost your ROI. \r\n \r\nWe also provide graphic design and call center services to handle all those new leads you\'ll be getting. \r\n \r\n \r\nd.stills@starkwoodmarketing.com \r\n \r\nMy website is http://StarkwoodMarketing.com', '2020-10-09 19:30:49', '2020-10-09 19:30:49'),
(30, 'OkhszjWfAbQXwoeF', '9235973621', 'thisoceyh@gmail.com', 'SrGqwQWazMFR', '2020-10-17 16:20:49', '2020-10-17 16:20:49'),
(32, 'Louiszog', '86771835275', 'dm@insights-advisory.com', 'Hi, \r\nInsights is offering financial services namely: \r\nCorporate Finance: Business Valuation, Financial Modelling, Investment Advisory, Business Plan & M&A \r\nRisk & Financial Advisory: IFRS Implementation, Actuarial Valuation, Bookkeeping, Internal Audit & SOP Development \r\nTax Advisory: Transfer Pricing & Tax Advisory \r\nReal Estate Advisory: Feasibility Study, Highest & Best Use Study. \r\nManagement Consultancy: Strategy, Restructuring & Organization \r\n \r\nVisit http://insights-advisory.com or call +61 470 459 417', '2020-10-20 14:58:55', '2020-10-20 14:58:55'),
(35, 'Linda Ray', '88863682982', 'linda.ray@theremarketingguys.com', 'I noticed that you are not running Google Remarketing on your website. \r\n \r\nThe most affordable advertising is marketing to previous web viewers who didn\'t convert. \r\n \r\nRemarketing via Google & Facebook ads means tracking and engaging these \'lost\' customers. \r\nThey were on your site once and may only need a reminder of your services and business. \r\n \r\nCan I help you grab these low hanging fruits? \r\n \r\nLinda Ray \r\nEmail - linda@theremarketingguys.com \r\nWebsite - http://www.theremarketingguys.com', '2020-10-31 15:49:39', '2020-10-31 15:49:39'),
(36, 'Adam Right', '89945257945', 'adam789bright@gmail.com', 'Looking for likes or followers for Facebook or Instagram \r\nWe can help you. Please visit https://1000-likes.com/ to place your order.', '2020-11-06 01:20:07', '2020-11-06 01:20:07'),
(37, 'Mable Shea', '9548398684', 'info@rankkking.com', 'It happens all the time. You try and try. You pour time and money into it, and you barely see any results.I’m not talking about slot machines. I’m talking about search rankings. No matter how many backlinks you build or content you publish, your website won\'t rank. The missing part is technical SEO.\r\n\r\n\r\nFor more information: https://rankkking.com/on-page-technical-seo/?src=au\r\nEmail US : info@rankkking.com', '2020-11-11 23:02:00', '2020-11-11 23:02:00'),
(38, 'Helina Khanum', '81816148319', 'amix77077@yandex.com', 'Assalamalekum, \r\n \r\nI apologies for sending this email by this but Its important you get back to me, \r\n  \r\nMy name is Mariam Fatima Wonders Al Khanum Ahmad, daughter of H.E. (Shaikh AL Musab married to Prince Sa\'Id in United Arab Emirates. Am reaching you through this way because I might not get you by phone. \r\n  \r\nI am restricted in some ways as a woman to do business. It\'s not been easy to communicate without brutal approach so I seek your assistance. \r\n  \r\nThe money involved is very huge. As a foreigner it will be easy for you. \r\n  \r\nI will like to keep this brief until I hear from you, you can reach me on he95451@protonmail.ch or mariam@saudiroyalfamily.live WhatsApp only: +971543604582. \r\n  \r\nHave a nice day, \r\nMariam Helina Amira Khanum Al-Saud', '2020-11-12 16:50:21', '2020-11-12 16:50:21'),
(39, 'James King', '81759586283', 'no-reply@google.com', 'Gооd dаy! \r\nI have just checked globalconnex.com.au for the ranking keywords and seen that your SEO metrics could use a boost. \r\n \r\nWe will improve your SEO metrics and ranks organically and safely, using only whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nPlease check our pricelist here, we offer SEO at cheap rates. \r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ \r\n \r\nStart increasing your sales and leads with us, today! \r\n \r\nregards \r\nHilkom Digital Team \r\nsupport@hilkom-digital.de', '2020-11-13 02:07:56', '2020-11-13 02:07:56'),
(40, 'OzGUDFCaKHxM', '7430438233', 'anwaitabi1@gmail.com', 'dwGlUXfTQLJVcsP', '2020-11-14 04:04:36', '2020-11-14 04:04:36'),
(41, 'Peter Richards', '82153663827', 'no-replyraf@gmail.com', 'Gооd dаy! \r\n \r\nWhen you order 1000 backlinks with this service you get 1000 unique domains, Only receive 1 backlinks from each domain. All domains come with Good SEO metrics and with actual page high PA values. Simple yet very effective service to improve your linkbase and SEO metrics. \r\n \r\nFix your globalconnex.com.au backlinks profile while having more domains linking to your website \r\nhttps://speed-seo.net/product/unique-domains-backlinks/ \r\n \r\nthank you \r\nSpeed SEO Digital \r\nsupport@speed-seo.net', '2020-11-29 05:09:32', '2020-11-29 05:09:32'),
(42, 'TOLCZVfvFd', '9483773916', 'landsemumic543@gmail.com', 'daGtiuxOZB', '2020-12-01 08:45:09', '2020-12-01 08:45:09'),
(44, 'Mike Liu', '85683837278', 'noreply@googlemail.com', 'Hello, \r\nOur Investors wishes to invest in your company by offering debt financing in any viable Project presented by your Management, Kindly send your Business Project Presentation Plan Asap. \r\n \r\nmikeliu2032cfbltd@gmail.com \r\n \r\nRegards, \r\nMr. Mike Liu', '2020-12-10 01:15:00', '2020-12-10 01:15:00'),
(45, 'JIQxWkiqrs', '5525239516', 'kristincrawford211@gmail.com', 'KDpQfWFCem', '2020-12-17 11:44:37', '2020-12-17 11:44:37'),
(47, 'Joe Miller', '+12548593423', 'info@domainworld.com', 'Notice#: 491343\r\nDate: 2020-12-18  \r\n\r\nYOUR IMMEDIATE ATTENTION TO THIS MESSAGE IS ABSOLUTELY NECESSARY!\r\n\r\nYOUR DOMAIN globalconnex.com.au WILL BE TERMINATED WITHIN 24 HOURS\r\n\r\nWe have not received your payment for the renewal of your domain globalconnex.com.au\r\n\r\nWe have made several attempts to reach you by phone, to inform you regarding the TERMINATION of your domain globalconnex.com.au\r\n\r\nCLICK HERE FOR SECURE ONLINE PAYMENT: https://domainsafesetup.com/?n=globalconnex.com.au&r=a&t=1608219794&p=v1\r\n\r\nIF WE DO NOT RECEIVE YOUR PAYMENT WITHIN 24 HOURS, YOUR DOMAIN globalconnex.com.au WILL BE TERMINATED\r\n\r\nCLICK HERE FOR SECURE ONLINE PAYMENT: https://domainsafesetup.com/?n=globalconnex.com.au&r=a&t=1608219794&p=v1\r\n\r\nACT IMMEDIATELY. \r\n\r\nThe submission notification globalconnex.com.au will EXPIRE WITHIN 24 HOURS after reception of this email', '2020-12-17 20:43:16', '2020-12-17 20:43:16'),
(51, 'bmfWFqczQaKUAVoN', '6213841816', 'morganharper7865@gmail.com', 'nZqxugrHdy', '2021-01-01 12:32:50', '2021-01-01 12:32:50'),
(53, 'Mike Saunder', '89936885449', 'see-email-in-message@monkeydigital.co', 'Hi there \r\n \r\nDo you want a quick boost in ranks and sales for your globalconnex.com.au website? \r\nHaving a high DA score, always helps \r\n \r\nGet your globalconnex.com.au to have a 50+ points in Moz DA with us today and rip the benefits of such a great feat. \r\n \r\nSee our offers here: \r\nhttps://www.monkeydigital.co/product/moz-da50-seo-plan/ \r\n \r\nNEW: \r\nhttps://www.monkeydigital.co/product/ahrefs-dr60/ \r\n \r\n \r\nthank you \r\nMike Saunder\r\n \r\nsupport@monkeydigital.co', '2021-01-16 17:50:25', '2021-01-16 17:50:25'),
(54, 'Niesha Salman Abdulaziz', '87579414718', 'nieshasalam0812@gmail.com', 'Assalamalekum, \r\n \r\nI apologies for sending this email like this but Its important you reply, \r\n \r\nMy name is Niesha Al Salman Abdulaziz, daughter of H.E. (Shaikh AL Abdul married to Prince Sa\'Id in Saudi Arabia. Am reaching you through this way because I might not get you by phone. \r\n \r\nAs a woman in Saudi Arabia, I am restricted in some ways as a woman. Even to do business is a problem and not easy for me, so I seek your assistance. \r\n \r\nThe money involved is very huge. As a foreigner it will be easy. \r\n \r\nI will like to keep this brief until I hear from you, you can reach me on  Nieshasalam0812@gmail.com or niesha@saudiroyalfamily.live \r\n \r\nHave a nice day, \r\nNiesha Salman Abdulaziz', '2021-01-21 04:23:56', '2021-01-21 04:23:56'),
(59, 'mktNUMvZg', '5018219996', 'hensleyj332@gmail.com', 'OyHlUQNdqEuZk', '2021-02-26 11:31:49', '2021-02-26 11:31:49'),
(62, 'Mario Gonzalez', '81162895413', 'mysolutions360@gmail.com', 'Hi, are you still in charge of globalconnex.com.au ? \r\n \r\nIf you take 30 sec to read this email, we could help you 2X-5X your business. \r\n \r\nMost SEO companies will ask you to pay upfront with no guarantee that your website will rank on Google. \r\n \r\nWe are different ... \r\n \r\nOur company specializes in Pay Per Performance SEO. Which means – \r\nWe get your business on the first page of Google before we get paid for our service. \r\n \r\nI know that’s a bold statement but we can back it up with 9 years of success in this industry. \r\n \r\nIf you’re interested in getting on the first page of Google, and only pay if you get there, \r\nlet me know when is a good time for a call. \r\n \r\nGet full details here or send us a message to mcmarketing360@hotmail.com: \r\nhttps://getmoreclientsfaster.com/performance-based-seo/', '2021-03-06 09:38:33', '2021-03-06 09:38:33'),
(63, 'Mohammed Hassan Ali', '87662162813', 'michmichhad@gmail.com', 'WE ARE; \r\n \r\nFunding any company in any kind of project; Financing Debt/ loans/Investment Opportunity Etc..., with \r\nonly 4% interest for 10 Years, with 3 years grace of return. \r\n \r\nRegards \r\nMohammed Hassan Ali \r\nWhatsApp:+44 7537 166152 \r\nmichmichhad@gmail.com', '2021-03-09 06:02:52', '2021-03-09 06:02:52'),
(65, 'Barrie Holdon', '88682564186', 'writingbyb@gmail.com', 'Hi! \r\n \r\nDo you struggle to find time to write articles? \r\n \r\nHire the best team of writing online today! \r\nWe do all the research and provide well-written SEO content perfect for higher ranking and better visitor engagement. \r\n \r\nIf you need fresh articles for your blog or content marketing strategies, check out our current content specials here: \r\n \r\nhttps://writingbybenjamin.com/best-seo-articles/', '2021-03-15 13:47:25', '2021-03-15 13:47:25'),
(66, 'Davidtam', '82834396385', 'bakhrashkandaurov1988861gib@inbox.ru', 'globalconnex.com.au gfgbfhtghrgfgfhtggyiyuiyhfbdfhdn', '2021-03-15 23:16:58', '2021-03-15 23:16:58'),
(68, 'Alexander Alan', '85668829159', 'alexander466alan@gmail.com', 'Looking for Facebook likes or Instagram followers? \r\nWe can help you. Please visit https://1000-likes.com/ to place your order.', '2021-03-26 00:49:30', '2021-03-26 00:49:30'),
(70, 'Stuart Crocker', '84411219778', 'stuartcrocker10@gmail.com', 'My name is Stuart Crocker, I am a Financial Consultant of Proquest Consulting limited . I have a client who has an interest in Investing in your country into a Joint Venture / Partnership. He has funds available meant for investment. \r\n \r\nPlease contact me if you are interested. \r\n \r\nRegards, \r\nStuart Crocker \r\nProquest Consulting limited \r\nEmail:   stuartcrocker9@gmail.com', '2021-04-01 07:08:10', '2021-04-01 07:08:10'),
(74, 'Gabriel Angelo', '83432572117', 'g.a76.52719@gmail.com', 'Hello, \r\n \r\nI\'m Gabriel Angelo, My Company can bridge fund for your new or ongoing Business. Do let me know when you receive this message for further procedure. \r\n \r\nYou can reach me using this email address: mailgabby773@gmail.com \r\n \r\nRegards, \r\nGabriel Angelo', '2021-04-14 13:18:24', '2021-04-14 13:18:24'),
(77, 'Beckett Wimmer', '84192897364', 'bestvillaco@email-checker.us', 'Good day, \r\n \r\nI\'m contacting you to have a good business relationship with you. I currently have a client that is interested in Investing in your Country and would like to engage you and your company on this project. \r\nKindly respond to this email for further details. \r\nRegards, \r\nBeckett Wimmer \r\nInvestment Manager \r\nBest Villa, Inc. USA \r\nE: bec.wimmer@bestvillaco.com', '2021-04-22 05:26:16', '2021-04-22 05:26:16'),
(78, 'AzkhxURDlrQK', '6620142192', 'croatian1978compulsive@gmail.com', 'CQBePqYShaGt', '2021-04-27 08:33:54', '2021-04-27 08:33:54'),
(80, 'Bill William Abbott', '81612251242', 'proquestconsul2@gmail.com', 'My name is Bill William Abbott, I am a Financial Consultant of Proquest Consulting limited . I have a client who has an interest in Investing in your country into a Joint Venture / Partnership. He has funds available meant for investment. \r\n \r\nPlease contact me if you are interested. \r\n \r\nRegards, \r\nBill William Abbott \r\nProquest Consulting limited \r\nEmail: proquestconsul@gmail.com \r\ninfo@oneofficedesk.com', '2021-05-04 07:30:42', '2021-05-04 07:30:42'),
(82, 'James Lambert', '85627811846', 'lambertj283@gmail.com', 'Good day \r\n \r\nI`m seeking a reputable company/ individual to partner with in a manner that would benefit both parties. The project is worth $24 Million so if interested, kindly contact me through this email jameslambert@lambert-james.com for clarification. \r\n \r\nI await your response. \r\n \r\nThanks, \r\nJames Lambert', '2021-05-08 06:47:09', '2021-05-08 06:47:09'),
(84, 'Yahoo', '81791475211', 'press@yahoo.com', 'Most profitable cryptocurrency miners has been released : \r\nDBT Miner: $7,500 (Bitcoin), $13,000 (Litecoin), $13,000 (Ethereum), and $15,000 (Monero) \r\n \r\nGBT Miner: $22,500 (Bitcoin), $39,000 (Litecoin), $37,000 (Ethereum), and $45,000 (Monero) \r\nRead more here : \r\nhttps://www.yahoo.com/now/bitwats-release-most-profitable-asic-195600764.html', '2021-05-13 11:49:55', '2021-05-13 11:49:55'),
(86, 'KUWARI MOHAMMED', '85877618881', 'kuwari42@lite17.com', 'Greetings. \r\n \r\nI am looking to work with you to engage in a business oriented venture in your country and perhaps with your assistance, we could get good ROI. I have the directive of Sheikh Mubarak AL-Thani to source for a partner abroad who can accommodate 7M USD and 10M USD for Investment. \r\n \r\nThe sum is derived from a Supply Contract by a foreign company with Qatar Petroleum Company in Doha - Qatar. We shall reassign the necessary documents to reflect your name and also ensure payment is done by Qatar Petroleum Company. I guaranty we shall implement this transaction under a legitimate arrangement without breaking the law. \r\n \r\nMore details will follow upon your reply to alkuwarimohammed42@gmail.com \r\n \r\nRegards, \r\n \r\nAL-KUWARI MOHAMMED \r\nalkuwarimohammed42@gmail.com', '2021-05-27 01:00:05', '2021-05-27 01:00:05'),
(88, 'Tom Martino', '88417752284', 'baasiminvestment@gmail.com', 'We have business partners who are willing to invest any amount into your business. \r\nFor more information contact: invest@baasim.com \r\nwhatsApp: +84923754944', '2021-06-12 05:49:05', '2021-06-12 05:49:05'),
(89, 'Ashlay Hazalton', '85585329848', 'ashlayhazalton36145@gmail.com', 'Hi, this is Chris. \r\nWho win all online casinos by using FREE BONUS. \r\n \r\nWitch mean, I don’t really spend money in online casinos. \r\n \r\nBut I win every time, and actually, everybody can win by following my directions. \r\n \r\neven you can win! \r\n \r\nSo, if you’re the person, who can listen to someone really smart, you should just try!! \r\n \r\nThe best online casino, that I really recommend is, Vera&John. \r\nEstablished in 2010 and became best online casino in the world. \r\n \r\nThey give you free bonus when you charge more than $50. \r\nIf you charge $50, your bonus is going to be $50. \r\n \r\nIf you charge $500, you get $500 Free bonus. \r\nYou can bet up to $1000. \r\n \r\nJust try roulette, poker, black jack…any games with dealers. \r\nBecause dealers always have to make some to win and, only thing you need to do is to be chosen. \r\n \r\nDon’t ever spend your bonus at slot machines. \r\nYOU’RE GONNA LOSE YOUR MONEY!! \r\n \r\nNext time, I will let you know how to win in online casino against dealers!! \r\n \r\nDon’t forget to open your VERA&JOHN account, otherwise you’re gonna miss even more chances!! \r\n \r\n \r\n \r\nOpen Vera&John account (free) \r\nhttps://bit.ly/3wZkpco', '2021-06-12 22:49:46', '2021-06-12 22:49:46'),
(90, 'RkTIBMuxGLqYONH', '5982668134', 'mbell1364@gmail.com', 'MjJBKOUTzYLFXA', '2021-06-18 09:36:40', '2021-06-18 09:36:40'),
(93, 'Nick Davis', '87995795293', 'nick@saaytext.com', 'Hi Its Nick, \r\n \r\nWe have a business texting platform that will help your team engage customers, leads & past clients through texting. \r\n \r\nIt\'s 49/mo for 30,000 texts, which is under 0.002 per message. \r\n \r\nYou can text your WHOLE LIST at once using the bulk send feature or send two-way texts and get replies. \r\n \r\n \r\nCheck it out @ http://SaayText.com \r\n \r\nThank you, \r\nNick', '2021-06-23 12:36:20', '2021-06-23 12:36:20'),
(96, 'Anthonylaply', '88623113345', 'info@buyrealfolowers.com', 'I am here to introduce to you an opportunity to get 10,000 real followers to your Instagram, Facebook, Twitter or Tiktok profiles for just $100. To grab this opportunity, Click here https://bit.ly/buyrealfollowers', '2021-07-20 14:23:30', '2021-07-20 14:23:30'),
(97, 'EliseoFug', '85728316539', 'pels1000@tele2.nl', 'Hello, \r\n \r\nDownload FLAC Music https://0dayflac.blogspot.com/ \r\n \r\nAll Style: House, Club, Techno, Trance, Dance, Italo-Dance, \r\nEurodance, Drum and Bass, Psychedelic, Goa, PsyTrance, \r\nProgressive House, Electro, Euro-House, Club-House, Hardtechno, \r\nTech-House, Dutch House, Minimal, Deep-House, Nu-Disco, \r\nHardstyle, Hardcore, Jumpstyle, Electronic, Alternative, \r\nAlternative Rock, Ambient, Avantgarde, Ballad, Bass, Beat, \r\nSoul, Soundtrack, Speech, Synthpop, Thrash Metal, Top 40, Vocal etc.', '2021-07-27 04:45:48', '2021-07-27 04:45:48'),
(98, 'Roberts Zuluf', '85277815743', 'rfzuluf@gmail.com', 'Hi \r\nHow are you? I wanted to reach out to you and verify that email was a good way to reach you or We can discuss this via the telephone,WhatsApp only. +90 555 140 8097 or  mtvls2019@gmail.com. \r\nI count in your honor for a quick response for a good deal. \r\n \r\nRegards, \r\nRoberts Zuluf', '2021-07-29 22:56:56', '2021-07-29 22:56:56'),
(99, 'Ruggiero Becker', '83647444437', 'epsgloballc@gmail.com', 'Hello \r\n \r\nAre looking for a loan to start-up a business or to expand your business, project like construction, real estate and debt consolidation, or even as personal loan and have been turned down by banks and other financial institutions, We are  financial loan management firms that specializes in giving financial assistance to individual and corporate bodies interested. \r\n \r\nif interested kindly get back to me via email for more information Lending@epsglobal-llc.com for more information \r\n \r\nThanks \r\nRuggiero', '2021-08-09 14:36:53', '2021-08-09 14:36:53'),
(100, 'Zlatina Jekova', '83413146976', 'laelegantiamarketing@gmail.com', 'Hello, globalconnex.com.au \r\nI just came across your website and I fell in love with your amazing brand! Well done! \r\nMy name is Zlatina Jekova and I am a popular blogger & social media expert based in Miami. I noticed that your brand has the potential to attract much more engagement and new customers through the social media platforms than it currently does (in terms of likes, comments, followers, reach and new leads). \r\nThanks to the effective social media strategy I have developed over the years, I have helped more than 150 brands to increase their sales, followers and brand awareness. I would love to manage your social media accounts and grow your presence on the platforms, in case you are interested. \r\nThe packages I currently offer are: \r\n1) Instagram account management (25 posts; 25 stories) – $600 per month. \r\n2) Management of 3 social media accounts (Pinterest, Instagram, Facebook, Tiktok or Twitter - 25 posts on each account) - $950 per month. \r\nIf you are interested in learning more about the service, please email me at laelegantiacollab@hotmail.com and I will send you my media kit, where you can find a ‘before’ and ‘after’ of accounts I manage and the results you can expect from the service. \r\nBest wishes, \r\nZlatina', '2021-08-10 02:40:14', '2021-08-10 02:40:14'),
(101, 'Charlie Meyer', '82327561771', 'trymonday.com@gmail.com', 'Hey I just checked your social media page and saw that you hadn’t posted much recently. \r\n \r\nI’m guessing it’s because you’re too busy? \r\n \r\nI stumbled across an amazing new tool the other day, which allows you to create social media content in a few seconds. \r\n \r\nIt’s literally changed my life!!! \r\n \r\nIt’s called Content Xpress and is cheap as chips to use: \r\nhttps://Contentxpress.co \r\n \r\nIn less than 2 minutes a day, I can create content for Facebook, Instagram, LinkedIn posts and stories. \r\n \r\nIt allows me to connect regularly with my audience without the hassle. \r\n \r\n \r\nAnyway give it a try, I think you’ll love it! \r\n \r\nCharlie :) \r\n \r\nhttps://Contentxpress.co', '2021-08-17 03:12:04', '2021-08-17 03:12:04'),
(102, 'TOeAkIqQjoyEGPt', '9794994020', 'shannaweaver3@gmail.com', 'MrlDaRVOvWJc', '2021-08-28 03:54:23', '2021-08-28 03:54:23'),
(104, 'ixfaEYsSXpCI', '4020946702', 'renatecarlie3l2t5d5ih@gmail.com', 'LlJzsAwNWVoYT', '2021-09-04 10:40:10', '2021-09-04 10:40:10'),
(105, 'RkHCxErasVfi', '2359085387', 'sylviaelliott4690@gmail.com', 'EwRPLjFXNJyxpeD', '2021-09-09 22:11:42', '2021-09-09 22:11:42'),
(107, 'XEdAqHwlYLronzQ', '3860296644', 'gilliecordieax6us8tj@gmail.com', 'SswWAdvKRj', '2021-09-24 16:19:41', '2021-09-24 16:19:41'),
(108, 'jcxztNlZFXda', '3573660172', 'brittankeyku82@gmail.com', 'dnUOXewFHMpIS', '2021-10-03 17:52:50', '2021-10-03 17:52:50'),
(109, 'rgMPFLqkQvZuiYmG', '4717577603', 'dawnaosfz819@gmail.com', 'xUiatLdPFzr', '2021-10-18 13:46:30', '2021-10-18 13:46:30'),
(112, 'Simon Johnson', '83823272213', 'tbformleads@gmail.com', 'Hello \r\n \r\nMy main objective here, is to help increase revenue for you by producing an animated video that will generate leads and sales for your business 24/7, for just $97. \r\n \r\nBut this offer is only good this week, so get your video before the deadline. \r\n \r\nWatch Our Video Now! https://bit.ly/Xpress97offer \r\n \r\nFor less than you spend on coffee each month you get an American Owned Video company that can write your script, create your story board, lay-in a good soundtrack and produce an awesome video that brings home the bacon. \r\n \r\nAgain, this $97 promotion is for this week only. Don’t miss out!!! \r\n \r\nWatch Our Video Now! https://bit.ly/Xpress97offer', '2021-12-10 18:52:15', '2021-12-10 18:52:15'),
(113, 'Donald Cole', '86791713298', 'lanj7962@gmail.com', 'Good day \r\n \r\nI contacted you some days back seeking your cooperation in a matter regarding funds worth $24 Million, I urge you to get back to me through this email coledd11@cloedcolela.com if you\'re still interested. \r\n \r\nI await your response. \r\n \r\nThanks, \r\n \r\nDonald Cole', '2021-12-13 22:39:22', '2021-12-13 22:39:22'),
(114, 'Mike Abramson', '84416169114', 'no-replyblowasy@gmail.com', 'Howdy \r\n \r\nWe will improve your Local Ranks organically and safely, using only whitehat methods, while providing Google maps and website offsite work at the same time. \r\n \r\nPlease check our pricelist here, we offer Local SEO at cheap rates. \r\nhttps://speed-seo.net/product/local-seo-package/ \r\n \r\nNEW: \r\nhttps://www.speed-seo.net/product/zip-codes-gmaps-citations/ \r\n \r\nregards \r\nMike Abramson\r\n \r\nSpeed SEO Digital Agency', '2021-12-18 22:28:18', '2021-12-18 22:28:18'),
(115, 'JAMES COOK', '87322891258', 'james_cook78@yahoo.com', 'Dear sir/ma \r\nWe are a finance and investment company offering loans at 3% interest rate. We will be happy to make a loan available to your organisation for your project. Our terms and conditions will apply. Our term sheet/loan agreement will be sent to you for review, when we hear from you. Please reply to this email ONLY cookj5939@gmail.com \r\n \r\nRegards. \r\nJames Cook \r\nChairman & CEO Euro Finance & Commercial Ltd', '2021-12-19 18:25:05', '2021-12-19 18:25:05'),
(119, 'GuQKWJswLhESb', '5928093841', 'walkerrose540@gmail.com', 'VmbUJdZPYBguAp', '2022-01-13 01:42:05', '2022-01-13 01:42:05'),
(121, 'RaymondRef', '87652258446', 'electricservice@gmail.com', 'New IPOs entering the securities market, platform https://goo.su/PXy', '2022-01-15 11:13:05', '2022-01-15 11:13:05'),
(126, 'gaxFqtVBHCNUQ', '3528825241', 'alexandriajffrsn@gmail.com', 'RLzwCpbNEqX', '2022-01-30 18:42:29', '2022-01-30 18:42:29'),
(130, 'Marty Tierney', '81258661389', 'livestaffinghub@gmail.com', 'Hello \r\n \r\nMy Name is Marty with Live Staff Hub.  My main objective here, is to help you increase revenue for your business by providing Social Media Marketing & Management for only $499 per month! \r\n \r\nTo learn more: WATCH MY VIDEO  https://bit.ly/499SocialMediaOffer \r\n \r\nOur specialists in Facebook, Instagram, LinkedIn and Twitter have a singular purpose and that is to drive more sales for your business. \r\n \r\nThis $499 promotion is for this week only. So, if you want to get this deal before the deadline, click the link below. \r\n \r\nTo learn more: WATCH MY VIDEO https://bit.ly/499SocialMediaOffer \r\n \r\nBest, \r\n \r\nMarty Tierney', '2022-02-03 12:05:40', '2022-02-03 12:05:40'),
(131, 'Thomas Kraynik', '84822941279', 'autoreply@ddmmarketing.ro', 'Hi there, \r\nAfter analyzing your business\'s online presence, we identified some key growth opportunities. \r\nWe can develop these points and provide you our data and market intelligence report analysis on your specific niche. \r\nMy company helps businesses like yours to grow and disrupt the market. \r\nBest of all, we handle all the IT and marketing implementations, making it extremely simple for you. \r\nSo, if you are interested in learning more about how we can help you get more clients and grow your brand let me know what your calendar looks like. \r\nBest, \r\nThomas Kraynik | SVP \r\nDigital Disruptive Marketing \r\nThe new way of outsourced marketing \r\nEmail: thomas@ddm.marketing \r\nhttps://ddm.marketing', '2022-02-06 09:03:07', '2022-02-06 09:03:07'),
(132, 'Diane Angelori', '88431616354', 'g.a.76.5.27.19@gmail.com', 'Hello \r\n \r\nI\'m Diane Angelori, online trading expert. I want you to know that Online trading (Crypto, Forex and Binary option) is a good thing if you have a good trading strategy, I use to loose a lot of funds in online trading before I got to where I am today. If you need assistance on how to trade and recover back all the money you have lost to your broker and want to be a successful online trader like me, write to me via email below to get an amazing strategy. \r\n \r\nIf you are having problems withdrawing your profit from your Crypt, Forex or Binary option trading account even when you were given a bonus, just contact me, I have worked with some Trade, Regulatory Agencies for 9years, and I have helped a lot of people get back their lost funds from their stubborn brokers successfully and I won\'t stop until I have helped as many as possible. For more info you can contact me via my email address: dangelori@protonmail.com', '2022-02-07 12:07:10', '2022-02-07 12:07:10'),
(133, 'jzKbVTtWe', '5180961246', 'fabianv8projection@gmail.com', 'wNUgJGcRXTHFW', '2022-02-08 03:29:00', '2022-02-08 03:29:00'),
(139, 'mRSIQPUfqA', '3440110414', 'sw164338@gmail.com', 'EJhqPiMrjzXHVBs', '2022-02-24 05:50:49', '2022-02-24 05:50:49'),
(144, 'Paco  Martinez', '81747579646', 'martinezpaco625@gmail.com', 'I am  a solicitor at law. I am the personal attorney to the late Mrs. Anna  who used to work with Shell - development company . Hereafter shall be  referred to as my client. \r\n \r\nOn the 29th  December  2009, my client, his husband and their three  children were involved in a car accident. All occupants of the vehicle unfortunately lost their lives. Since then I have made several enquiries to your embassy to locate any of my clients extended  relatives. \r\n \r\nAfter these several unsuccessful attempts, I decided to track his last  name over the Internet, to locate any member of his family hence I  contacted you. \r\n \r\nThe finance company where the deceased had an account valued at about  9.5 million euros has issued me a notice to provide the next of kin or have the account confiscated within the next ten  official working days. \r\n \r\nSincerely, \r\nBarrister   Paco  Martinez (Esq) \r\nTel/Fax:  0034-604-197-938 \r\nReply To:  Pacomartinezconsultant@gmail.com', '2022-03-06 04:50:32', '2022-03-06 04:50:32'),
(145, 'Jimmiefah', '86542877129', 'support@australianinjurycompensation.com', 'Attention all Australians: Have you ever been injured? Check your compensation entitlements now. Visit: https://australianinjurycompensation.com', '2022-03-08 03:45:51', '2022-03-08 03:45:51'),
(148, 'Anonymous Pharmacy', '85684625376', 'legitanonymousfada@gmail.com', 'Buy GHB and GBL online - GHB (gamma hydroxybutyrate) for sale online \r\n4-mmc \r\n5-meo dmt \r\nTramadol 50mg online \r\nDMT, \r\nCrystal Meth \r\nA-pvp \r\nKetamine \r\nLSD \r\necstasy/molly \r\nMDPV \r\nU-47700 \r\nAdderall \r\nCrack/uncrack cocaine \r\nMethylone \r\nOxycodone \r\nNembutal powder/solution and pills \r\nPotassium cyanide \r\nMephedrone (4-MMC) \r\nXanax 2 mg \r\nDiazepam \r\nAdderall \r\nAll inquiries are welcome 24/7. \r\nwebsite:https://anonymousalphapharmacy.com/ \r\nWhatsApp Number +1(469) 431-3201 \r\nWickR \r\nID(anonymousfada) \r\nE-mail:anonymousalphapharmacy@gmail.com', '2022-03-13 03:03:49', '2022-03-13 03:03:49'),
(149, 'pKgybBEYMQqk', '3014304920', 'issacdemarcus0@gmail.com', 'mDdGljfTugS', '2022-03-14 14:34:51', '2022-03-14 14:34:51'),
(151, 'Christian Djurit', '89534556552', 'zummkke@icloud.com', 'We provide funding  through our venture company to both startups and existing businesses either looking for expansion or to accelerate their company growth. \r\nWe have a structured joint venture investment plan in which we are interested in an annual return on investment not more than 10% ROI. We are also currently structuring a convertible debt and loan financing of 3% interest repayable annually with no early prepayment penalties. \r\nEmail: chris.djurit@protonmail.com \r\nchris.djurit@alconmcl.com \r\nChristian Djurit \r\nDirector/Investment Head \r\nAlcon Management Company LTD UK.', '2022-03-16 04:35:27', '2022-03-16 04:35:27'),
(156, 'Michael', '89735724261', 'hivemailers@gmail.com', 'Hello, \r\n \r\nI would like to schedule a quick call to discuss our marketing system that can bring you leads daily. \r\n \r\nWe use a robust email application that mimics real people sending emails, so we get a huge delivery rate. \r\n \r\nSTART GETTING HOT LEADS NOW: \r\n \r\n- We create the content for the email(s) \r\n- We forward leads to you daily. \r\n- We send to 500 new contacts a day M-F (10k monthly), then we send 5 follow up emails (that is 50k emails a month) \r\n \r\nPlus!! Monthly, we provide the 10,000 targeted new email addresses that we will email to. That email list is worth over $2,000 a month, but you get that free with our service. \r\n \r\nJust imagine, you will start getting hot leads within days of getting started with us. Get started now for a $47.00 setup fee and just $997 per month (month-to-month/no long-term contract) \r\n \r\nBook a 10 min call with me now: https://calendly.com/msinclair-myaa/myaa-overview \r\n \r\nNOTE: To hire a person to send one-to-one emails (like our system does) would cost around $2,500 a month, but with us, you pay just $997. \r\n \r\nOffer good for the first 20 clients, start getting quality leads now, don’t miss out. \r\n \r\nSincerely, \r\n \r\n-	Michael', '2022-03-30 22:59:12', '2022-03-30 22:59:12'),
(157, 'Bah Mbi', '81833287299', 'hrhmbambi@gmail.com', 'Dear Director, \r\n \r\nWe are interested in your products. Please contact us if your company can handle a bulk supply of your products to Cameroon. \r\nPlease send your reply to \r\nRegards hrhbah-mbi@aghemfondom.com \r\nHRM Bah Mbi', '2022-03-31 18:14:16', '2022-03-31 18:14:16'),
(159, 'WesleyLax', '83213311238', 'lenderintegratedsolution@gmail.com', 'Hello do you have pending deals that needs urgent fundings, \r\nWe provide private money loans with lower rates/better terms to real estate investors, builders, developers and business owners to solve their capital challenges, support business growth and revitalize. If you\'re interested in our services, please respond with your email for more info or forward your loan request to   info@lendersintegratedsolutions.com You can also visit our website At: https://lendersintegratedsolutions.com \r\nTelephone: +1(401) 721-4212', '2022-04-01 22:23:22', '2022-04-01 22:23:22'),
(161, 'ZxlfYnPsHRBvze', '9886816413', 'riverabduneca@gmail.com', 'BdkwfjivOr', '2022-04-10 02:27:11', '2022-04-10 02:27:11'),
(162, 'Ryan Hart', '83986396795', 'ryanhartvideos@gmail.com', 'Hey! \r\n \r\nDo you want to increase sales for your business 24/7? \r\n \r\nIf so, you have to grab people’s attention quickly. And there’s nothing like a catchy explainer video to do the trick! \r\n \r\nI have an exclusive offer available for the first 20 people that act on this message today, but you have to act fast. \r\n \r\nWhile you would normally pay as much as $600, or probably even $1,000, for a single 60-second video, I am providing the same service and giving you TWO VIDEOS for only $147. That’s right, less than $75 per video, which is unheard of! \r\n \r\nYou can order now at: https://bit.ly/two-video-promo \r\n \r\nNot sure if you caught it, but this offer is only good this week, for the first 20 clients, so you need to order now, before you miss out. \r\n \r\nAgain, this $147 promotion is for TWO VIDEOS and is for this week only. Don’t miss out!!! The normal price of this package is $1,135, so you are saving $938. \r\n \r\nClick Here Now To Watch The Animated Video That We Created To Explain It All \r\n---> https://bit.ly/two-video-promo \r\n \r\nSee you at the movies, \r\n \r\nRyan Hart \r\nXpress Animation', '2022-04-11 08:15:36', '2022-04-11 08:15:36'),
(164, 'Harry Williams', '6207654699', 'harrywilliamwork6@gmail.com', 'Hey,\r\n\r\nYour website\'s design is absolutely brilliant. The visuals really enhance your message and the content compels action. I\'ve forwarded it to a few of my contacts who I think could benefit from your services.\r\n\r\nWhen I was looking at your site, though, I noticed some mistakes that you\'ve made re: search engine optimization (SEO) which may be leading to a decline in your organic SEO results. Would you like to fix it so that you can get maximum exposure/presence on Google, Bing, Yahoo and web traffic to your website?\r\n\r\nIt\'s a relatively simple fix. If this is a priority.\r\n\r\nPlease share your “Mobile Number\" and a suitable time to talk, so I can help you in that.\r\n\r\n\r\nRegards,\r\nHarry Williams\r\nDigital Marketing Expert\r\n\r\nYou can call also our Support Assistant\r\nMiss Sharon: 1-386-202-4511\r\nMiss Catherine: 1-620-765-4699', '2022-04-12 22:54:39', '2022-04-12 22:54:39'),
(165, 'MichealVew', '87672416299', 'help@aweb.sbs', 'Привет, мы маленькая, но гордая студия из Украины. Конкретно, из Донецка. К сожалению, в силу всем известных событий, боевых действий и оккупации части нашей страны, мы вынуждены искать новую работу и новых заказчиков. \r\nМы предлагаем обновить или разработать сайт, провести SEO, настроить кампанию в Google Ads и вести любые иные аспекты вашей online activity. Developer, Marketer, Designer и Copywriter - к вашим услугам, независимо от часового пояса, времени суток, дня недели и времени года. \r\nОбладая квалификацией создания English-speaking resources мы работаем с теми, кому рабочие вопросы удобно решать, в том числе, на русском языке. Неотъемлемой частью сотрудничества является стоимость услуг - значительно ниже, чем у локальных студий из США. Поддержите нас пожалуйста, нам нужна только работа! \r\nSummary: \r\n- SEO и выход в Top-10 Google Search. \r\n- Booking and ordering with CRM integration. \r\n- Google Ads. \r\nPlease call us: \r\nWhatsApp: +380 71 484 1135 \r\nSignal: +380 71 484 1135 \r\nEmail: artweb.agency@gmail.com \r\nС уважением, Антон Пугач.', '2022-04-13 15:03:07', '2022-04-13 15:03:07'),
(166, 'okTMIHVOyeWxnm', '7787284595', 'miamai2722h@gmail.com', 'fwXYGBcPLt', '2022-04-15 19:09:45', '2022-04-15 19:09:45');
INSERT INTO `contacts` (`id`, `contact_name`, `contact_phone`, `contact_email`, `contact_message`, `created_at`, `updated_at`) VALUES
(169, 'DennisSeemi', '83736175431', 'marketing@tradeboard.biz', 'Setting up your business in Vanuatu offers unmatched advantages that include but not limited to: \r\n \r\n•	Vanuatu IBCs are tax exempt \r\n•	Domestic taxation is not payable on the net chargeable profits of Exempt and International Companies \r\n•	Vanuatu does not have party in any double taxation treaty with another country \r\n•	It  is not required to hold annual general meetings \r\n•	There is no need to file annual returns \r\n•	The international companies may name natural or legal person as directors, and may be of any nationality \r\n•	There are no exchange controls in Vanuatu \r\n \r\nAt Trade Board Limited, we can help you setup your business in Vanuatu, open local and international corporate  bank accounts and apply for Financial Dealers License (Forex and digital assets) in addition to citizenship and Permanent Residency services in tax haven tropical paradise. \r\n \r\nVisit our website to learn more about our services: \r\nhttps://tradeboard.biz \r\n \r\nOur support team is always available to respond to your inquiries. \r\n \r\nThank You for your time!', '2022-04-20 03:10:44', '2022-04-20 03:10:44'),
(172, 'Christian Djurit', '82721415833', 'christian.djurit@yandex.com', 'We provide funding  through our venture company to both startups and existing businesses either looking for expansion or to accelerate their company growth. \r\nWe have a structured joint venture investment plan in which we are interested in an annual return on investment not more than 10% ROI. We are also currently structuring a convertible debt and loan financing of 3% interest repayable annually with no early prepayment penalties. \r\nEmail: Chris.djurit@alconmcl.com \r\ndjuritchris@gmail.com \r\n \r\nChristian Djurit \r\nDirector/Investment Head \r\nAlcon Management Company LTD UK.', '2022-04-28 14:50:02', '2022-04-28 14:50:02'),
(174, 'Duncan Smith', '81419182352', '5rdhp2fe29yb@beconfidential.com', 'Dear Sir/Madam \r\n \r\nYou can only achieve financial freedom when you create multiple streams of income. \r\n \r\nI have an investment portfolio that will benefit both of us and I hope it will be appealing to you. \r\n \r\nIf interested contact me for more information via my E-mail: smithduncan610@gmail.com \r\n \r\nI look forward to your quick reply. \r\n \r\nRegards \r\nDuncan Smith', '2022-04-29 22:00:14', '2022-04-29 22:00:14'),
(175, 'Jeremy', '81872552213', 'teammyaa2022@gmail.com', 'Hello, \r\n \r\nI would like to schedule a quick call to discuss our marketing system that can bring you leads daily. \r\n \r\nWe use a robust email application that mimics real people sending emails, so we get a huge delivery rate. \r\n \r\nSTART GETTING HOT LEADS NOW: \r\n \r\n- We create the content for the email(s). \r\n- We forward leads to you daily. \r\n- We send to 500 new contacts a day M-F (10k monthly), then we send 5 follow up emails (that is 50k emails a month). \r\n \r\nPlus!! Monthly, we provide the 10,000 targeted new email addresses that we will email to. That email list is worth over $2,000 a month, but you get that free with our service. \r\n \r\nJust imagine, you will start getting hot leads within days of getting started with us. Get started now for a $47.00 setup fee and just $997 per month (month-to-month/no long-term contract). \r\n \r\nBook a 10 min call with me now: Click Here (   https://bit.ly/3rLTG2O   ) \r\n \r\nNOTE: To hire a person to send one-to-one emails (like our system does) would cost around $2,500 a month, but with us, you pay just $997. \r\n \r\nOffer good for the first 20 clients, start getting quality leads now, don’t miss out.  Book appointment now: Click Here   (   https://bit.ly/3rLTG2O   ) \r\n \r\n \r\nSincerely, \r\n \r\n-	Jeremy', '2022-04-30 07:45:55', '2022-04-30 07:45:55'),
(180, 'Matthewflevy', '86326371461', 'boostsocialmediauk@gmail.com', 'Buy Followers, Likes, Views and more for all you social media channels. \r\nInstagram, Facebook, Tiktok and more \r\nPrices: https://boostsocialmedia.uk/services \r\n \r\nGenerate more leads by boosting your insights and impressions on your social media channels. \r\nSend mass mailing targeting countries B2B and B2C \r\nBoost your business and be noticed. \r\n \r\nStart Now: https://www.boostsocialmedia.uk \r\n \r\nCheapest Price in the market. \r\nWhatsApp: https://wa.me/+441225581148?text=Hi \r\n \r\nCompany Registration number: https://www.gov.uk/ ?14053532 \r\n \r\nWebsite: https://www.boostsocialmedia.uk', '2022-05-16 15:30:31', '2022-05-16 15:30:31'),
(183, 'Kalra Anil', '84786421699', 'info@wealthfunders.org', 'We are a private investment banking firm offering equity financing and mortgages. The larger the loan, the more likely the funding. We are not looking for but will consider J.V. depending on the strength of the project. \r\n \r\nWe also offer credit advisory services to positively impact fiduciary attractiveness which enables our borrowers to qualify for increasing loan amounts throughout the lending process. Thus, our borrowers can qualify for almost any amount of funding they seek. \r\n \r\nPlease send a 1-2 page summary describing your project along with how much funding you seek to kalra.anil@wealthfunders.org and if it\'s a fit, we will reach out to you for more information. Please keep the summary succinct. \r\n \r\nWarm Regards \r\nKalra Anil \r\nkalra.anil@wealthfunders.org', '2022-05-21 07:02:56', '2022-05-21 07:02:56'),
(184, 'Jose Manuel', '84423244791', 'vocesmerayojosemanuel2@gmail.com', 'My name is Jose Manuel, I live in France. I suffer from a serious illness which condemns me to a \r\ncertain death is throat cancer. That being said, I have a \r\nsum of 1770,000 euros in my account with the Bank which I would like to make a donation to a trustworthy and honest person so that he can make good use of it. I own a bottle manufacturing business. \r\nPlease contact me quickly if you are \r\ninterested in my Don, because my days are numbered. \r\nMail: \r\nvocesmerayojosemanuel@gmail.com', '2022-05-24 15:59:12', '2022-05-24 15:59:12'),
(186, 'Zuki Chang', '88191972582', 'info.meiwa@via.tokyo.jp', 'Hello, \r\n \r\nIf you are based in the United States of America, Meiwa Corporation Co, Ltd urgently needs you to serve as her Spokesperson/Financial Coordinator for its clients in the United States. It\'s a part-time job with a good pay and will only take a few minutes of your time daily, and it will not bring any conflict of interest in case you are working with another company. If interested, contact email: info@meiwacorporations.com \r\n \r\n \r\nBest Regards \r\nZuki Chang \r\nMeiwa Corporation co.Ltd. \r\n3-chome, Chiyoda-ku, \r\nTokyo 100-8311, Japan', '2022-05-30 08:24:20', '2022-05-30 08:24:20'),
(187, 'JamesAvems', '88872317996', 'jasonward9681@gmail.com', 'Hello, \r\n \r\nOur company, RatingsKing, specializes in posting 5-star testimonials on all major review sites. This way people can find you much easier and get a good impression of your business. \r\nJust go on our website and choose the package that best fits your needs at https://ratingsking.com/packages.php \r\n \r\nOur packages start from $49/month. \r\nDepending on your package you will have a number of positive reviews that we will do for you. You will have reports monthly with the work that has been done in your account. \r\n \r\nUsually, we are posting on all major reviews sites or other listings you may have.', '2022-05-31 03:36:17', '2022-05-31 03:36:17'),
(188, 'zTtlbwAKno', '5298717233', 'gabrielmason6654@gmail.com', 'uBShEQdlmHb', '2022-06-04 00:25:30', '2022-06-04 00:25:30'),
(192, 'Kevin Johnson', '86938832718', 'funneldeals360@gmail.com', 'Hello \r\n \r\nDo you want to get more leads for your business or increase sales within days? \r\n \r\nThen you might want to get a Sales Funnel Landing Page that will motivate prospects to take action immediately and drive more sales for your business. \r\n \r\nAnd today, we have slashed our price from $997 to just $497. So, you are saving $500 when you order a Sales Funnel this week. \r\n \r\nBut this offer is only good this week, for the first 10 clients, so you need to order now, before you miss out. \r\n \r\nTo Book A 10 Minute Call With Me, Click Here: https://bit.ly/gb360-funnel-appointment \r\n \r\nYou can get an American owned and operated professional Sales Funnel building marketing company to create a high-quality Sales Funnel for your business. \r\n \r\nDid you know: \r\n \r\n•	Sales Funnels are much more powerful than websites when it comes to conversions \r\n•	Sales Funnels average sales per visitor is 2-3 times higher per order than a standard website \r\n•	Sales Funnels are one of the most inexpensive tools to use to obtain prospect contact info \r\nAgain, this $497 promotion is for this week only. Don’t miss out!!! The normal price is $997, so today you are saving $500. Get a sales funnel today before the 10 discounted funnel slots are gone. \r\n \r\nClick Here Now To Book A 10 Minute Call With Me: https://bit.ly/gb360-funnel-appointment', '2022-06-06 12:44:31', '2022-06-06 12:44:31'),
(196, 'Charlotte Gabriel', '87577311285', 'charlottegabriel@stayhome.li', 'Hello, \r\n \r\nI\'m Charlotte Gabriel, An online trading Coash. I want you to know that online trading (Crypto, Forex and Binary option) is a good thing if you have a good trading strategy, I use to lose a lot of funds in online trading before I got to where I am today. If you need assistance on how to trade and recover back all the money you have lost to your broker and want to be a successful online trader like me, write to me via email below to get an amazing strategy. \r\n \r\nIf you are having problems withdrawing your profit from your Crypto, Forex or Binary option trading account even when you were given a bonus, just contact me, I have worked with some Trade, Regulatory Agencies for 9years, and I have helped a lot of people get back their lost funds from their stubborn brokers successfully and I won\'t stop until I have helped as many as possible. For more info you can contact me via my email address: charlgabriel07@gmail.com \r\n \r\nKind Regards, \r\nCharlotte Gabriel. \r\nTrading Consultant.', '2022-06-14 21:41:50', '2022-06-14 21:41:50'),
(198, 'btKlrcELv', '8037260807', 'emicheline72e193a@outlook.com', 'XMuZUpGmAgkQE', '2022-06-22 05:24:32', '2022-06-22 05:24:32'),
(206, 'JessePlerm', '84427452323', 'jessicasamantha663@gmail.com', 'We are a Team of IT Experts specialized in the production of authentic Documents and Counterfeit bank notes. We work with government officials, professors and professional hackers from China, US, Russia, Taiwan etc. All these documents are registered into the supposed database. Documents such as Passport, Visa\'s, Driving License, Covid19 Vaccine Card, University Certificates etc. We also have Canadian dollars, US dollars, pounds and euros. We also have our money in categories, Grade A quality that works at ATMs and bypasses the fake money detector and we also have the normal stage money that was used in jokes, commercials, music and movie videos. Contact details below. \r\nWhatsApp..... +44 7459 530545 \r\nEmail Address.... jameskinds65@gmail.com \r\nTelegram ID..... \"@Jameskind65\" \r\nWickr Me ID..... Jameskind65.', '2022-07-10 22:13:43', '2022-07-10 22:13:43'),
(208, 'Mason Jones', '88551283753', 'explaineranimationstudio7@gmail.com', 'Hey! \r\n \r\nDo you want to increase sales for your business 24/7? \r\n \r\nIf so, you have to grab people’s attention quickly. And there’s nothing like a catchy explainer video to do the trick! \r\n \r\nI have an exclusive offer available for the first 20 people that act on this message today, but you must act fast. \r\n \r\nWhile you would normally pay as much as $600, or probably even $1,000, for a 60-second video like this, I am providing the same service for only $97. \r\n \r\nDon’t be fooled by the price, we create high-quality videos, and you can see samples or order now at: https://bit.ly/explainer-animation-promo \r\n \r\nNot sure if you caught it, but this offer is only good this week, for the first 20 clients, so you need to order now, before you miss out. \r\n \r\nAgain, this $97 promotion is for a 60-second explainer video and is for this week only. Don’t miss out!!! \r\n \r\nClick Here Now To Watch The Animated Video That We Created To Explain It All \r\n---> https://bit.ly/explainer-animation-promo \r\n \r\nCheers, \r\nMason Jones \r\nExplainer Animation Studio', '2022-07-19 17:16:00', '2022-07-19 17:16:00'),
(210, 'AqjTNfJe', '8671553754', 'oshatoyaeu291ok2i7o68@outlook.com', 'dVTCePRQNmWJX', '2022-07-26 03:18:42', '2022-07-26 03:18:42'),
(219, 'Waheed Mohammed', '86949264173', 'waheedalgore22@gmail.com', 'Hello, \r\n \r\nWe provide funding through our venture capital company to both start-up and existing companies either looking for funding for expansion or to accelerate growth in their company. We have a structured joint venture investment plan in which we are \r\ninterested in an annual return on investment not more than 10% ROI. We are also currently structuring a convertible debt and loan financing of 3% interest repayable annually with no early repayment penalties. If you have a business plan or executive summary, I can review to \r\nunderstand a much better idea of your business and what you are looking to do, this will assist in determining the best possible investment structure we can pursue and discuss more extensively. If you are interested in any of the above, kindly respond to us via this email. waheed@almarisinvestmentgroup.com \r\n \r\nSincerely \r\nEngineer Waheed Mohammed \r\nChief Financial Officer \r\nAl-Maris Investment Group \r\nhttp://www.almarisinvestmentgroup.com/', '2022-08-13 19:54:52', '2022-08-13 19:54:52'),
(220, 'HWatqoklDdM', '9805711462', 'savvase095o2y3@outlook.com', 'vELNtBcbHzdqr', '2022-08-14 09:04:45', '2022-08-14 09:04:45'),
(227, 'Hanna Brown', '86245968642', 'chitchatchannel01@gmail.com', 'During COVID19, only businesses that had virtual platforms made money. In this recession, having extra outlets will be the key.  https://ChitChatChannel.com fills that gap by giving your business its own real-time ordering /shipping system, like UberEats, nestled within a Social Business Page, like Facebook. \r\nSo, whatever your business, you are right there, building your brand, and growing your followers in such a way as to reach, engage, and monetize through the recession. Your secret sauce! Try it. Sign up at https://chitchatchannel.com \r\nH.B \r\nAdd me up on LinkedIn at: https://www.linkedin.com/in/hanna-brown-096a22b6', '2022-08-27 06:54:23', '2022-08-27 06:54:23'),
(228, 'Philipcek', '84712163695', 'mordvinovmilano+adlc@mail.ru', 'globalconnex.com.au ofeiifeodwpdeofijesdwsfeiiejokdwpdoefigjfidoksfihigjskodwsfiheghifegergsdfsregsfggrgr', '2022-08-28 02:25:33', '2022-08-28 02:25:33'),
(231, 'Max Williams', '7077060205', 'siterank03@gmail.com', 'Hello and Good Day\r\nI am Max (Jitesh Chauhan) Marketing Manager with a reputable online marketing company based in India.\r\nWe can fairly quickly promote your website to the top of the search rankings with no long term contracts!\r\nWe can place your website on top of the Natural Listings on Google, Yahoo and MSN. Our Search Engine Optimization team delivers more top rankings than anyone else and we can prove it. We do not use \"link farms\" or \"black hat\" methods that Google and the other search engines frown upon and can use to de-list or ban your site. The techniques are proprietary, involving some valuable closely held trade secrets.\r\nWe would be happy to send you a proposal using the top search phrases for your area of expertise. Please contact me at your convenience so we can start saving you some money.\r\nIn order for us to respond to your request for information, please include your company’s website address (mandatory) and or phone number.\r\nSo let me know if you would like me to mail you more details or schedule a call. We\'ll be pleased to serve you.\r\nI look forward to your mail.\r\nThanks and Regards', '2022-09-06 14:06:16', '2022-09-06 14:06:16'),
(233, 'NZUiKBWrkMuL', '2015467900', 'zphilaneuyl2e4ix79z8@outlook.com', 'vErwhQPmRoBKeb', '2022-09-09 04:53:29', '2022-09-09 04:53:29'),
(237, 'Floydmoiva', '89836828669', 'mymail@mymails.cmo', 'The Sun: News, sport, celebrities and gossip \r\nWE REFUSE TO BELIEVE IT: Johnny Depp is fabulously rich again! https://87bil.co/thesun.co.uk/?news-id-857398', '2022-09-16 11:59:50', '2022-09-16 11:59:50'),
(238, 'mPSGxXiQ', '3492747699', 'ckain8263x1oy5dicoc@outlook.com', 'tfgqmURxhyFKYZG', '2022-09-16 19:42:06', '2022-09-16 19:42:06'),
(242, 'GlkqpaZj', '9649063978', 'ajamiah0ua027i0i60@outlook.com', 'ZrxlIShcUbiOQ', '2022-09-21 16:02:35', '2022-09-21 16:02:35'),
(243, 'Migueltic', '82761377392', 'mymail@mailsb.cos', 'MarketCap: $6,717,653,168 \r\n \r\nPosition on CMC: #14 \r\n \r\nCurrent Price: $0.00001223 \r\n \r\nShiba Inu SHIB is one of the most dangerous cryptocurrencies available today. \r\n \r\nBuy Shiba Inu SHIB right now at a favorable rate here: http://shib-coin-price.nextlevels.tech/id-4767 \r\n \r\nIt’s no surprise that this dog-themed meme currency increased in value by more than a million percent during various periods last year. \r\n \r\nBut many times in the previous two years, it has had over 1,000%. \r\n \r\nBuy Shiba Inu SHIB right now at a favorable rate here: http://shib-rewards.nextlevels.tech/news-8075 \r\n \r\nInvestors and analysts are predicting a 10,000-fold increase in Shiba Inu SHIB by December 27, 2022. \r\n \r\nTherefore, we all still have time to purchase this coin and get rich by 2023. \r\n \r\nBuy Shiba Inu SHIB right now at a favorable rate here: http://xrp-vs-shiba.nextlevels.tech/news-4093 \r\n \r\nEven if you buy SHIB for $500 now, by the end of December this asset will be at least $5,000,000.', '2022-09-21 17:32:27', '2022-09-21 17:32:27'),
(244, 'LouisSoync', '89187523433', 'mymail@mymails.con', 'A student from Australia earned $ 30,000,000 in 1.5 months https://telegra.ph/Interesting-news-a-student-from-Australia-earned--30000000-in-15-months-09-22?news-id-152296', '2022-09-22 10:47:31', '2022-09-22 10:47:31'),
(245, 'Carlos', '89431392553', 'carlosercredit@gmail.com', 'COVID-19 has been a challenge for all of us. \r\n \r\nAs the world shut down the economy came to a halt, \r\nleaving the future of many businesses in a precarious \r\nposition. \r\n \r\nAs we begin to find normalcy again, businesses now \r\nhave to focus on recovering and fortunately, several \r\ngovernment programs are easing this process. \r\n \r\n- UP TO $26,000 PER EMPLOYEE \r\n-  AVAILABLE FOR 2020 & Q1 - Q3 2021 \r\n-  QUALIFY WITH DECREASED REVENUE OR COVID EVENT \r\n-  NO LIMIT ON FUNDING (THE ERC IS NOT A LOAN) \r\n-  ERC IS A REFUNDABLE TAX CREDIT \r\n \r\nTo register for free to get assistance: \r\n \r\nText me: ERC Info to 917 650 792five \r\n \r\nWe only make money if you get money! \r\n \r\nI you have any questions, text me \r\n \r\nCarlos \r\n917 650 792five', '2022-09-24 05:15:46', '2022-09-24 05:15:46'),
(247, 'Jamesbab', '86769242961', 'office54792022@gmail.com', 'Dear Importers/Exporters, \r\non behalf of BRAZIL CHICKEN GROUP,  manufacturers and suppliers are writing this letter to you to introduce to you the services provided by us that will help you in the redevelopment of your import export supply chain. CHICKEN PARTS, FROZEN AND HALAL EXPORT \r\nContact now for verified And Approved Sugar Exporters: https://www.brazilbizassociation.com/ \r\n \r\nYours Truly, \r\nBRAZIL CHICKEN GROUP', '2022-09-25 17:23:13', '2022-09-25 17:23:13'),
(248, 'JosephKet', '88454246787', 'amko12.tabakovic@gmail.com', '12 Best Altcoins to Invest in 2022 Before it Goes to The Moon https://telegra.ph/Cryptocurrency-Investment-Analyst-Report-09-25-56458', '2022-09-26 05:02:12', '2022-09-26 05:02:12'),
(249, 'DavidAvect', '89446736268', 'carsten@s260044999.online.de', 'KryptowГ¤hrungseinkommen von 9.000.000 $ in 3 Monaten https://telegra.ph/Insiderinformationen-zu-Investitionen-in-KryptowГ¤hrung-und-Einkommen-150000-09-26-31783', '2022-09-26 15:40:18', '2022-09-26 15:40:18'),
(251, 'Thomasbib', '89994286859', 'ann.kristin.slind@selbu.kommune.no', 'Get 90% discount for you and your website globalconnex.com.au http://weverse-shop.animeflower.com/product-4779', '2022-09-27 06:44:02', '2022-09-27 06:44:02'),
(252, 'Peterenham', '88241818998', 'marconiperez99@gmail.com', 'This 36-year-old made over $309,000 in about 9 https://telegra.ph/Earnings-on-NFT-on-autopilot-from-1000-per-day-09-27-1106?news-id-135922', '2022-09-27 21:16:36', '2022-09-27 21:16:36'),
(253, 'Van Gurt', '85628358917', 'vangurt@insurecalc.co', 'Good Morning. \r\n \r\nWe provide international loans for corporate and private entities all over the world. \r\n \r\nOur interest rate for secured and unsecured loans ranges between 2.5-6.7% PA, with a 12 months grace period and private investment fund are also available depending on the project to be executed. \r\n \r\nDo acknowledge receipt of my email by replying to van.gurt111@gmail.com for further assistance. \r\n \r\nWe look forward to bringing you on board - a new way of achieving financial stability. \r\n \r\n \r\n \r\nVan Gurt \r\nvan.gurt111@gmail.com', '2022-09-27 22:56:22', '2022-09-27 22:56:22'),
(254, 'Peterenham', '87363577611', 'jody_reiss@yahoo.com', 'iPhone 13 get it now http://free-iphone-data-recovery.soulverity.com/id-4132', '2022-09-28 17:18:15', '2022-09-28 17:18:15'),
(255, 'Stanleyvok', '87344158321', 'hamlet@nationwide.net', 'Smart Promotion on Facebook http://facebook-ad-account-restricted.mokshaacharya.com/id-2021', '2022-10-03 11:39:25', '2022-10-03 11:39:25'),
(258, 'IsraelMok', '87776617636', 'teamawesome@live.com.au', 'The Wolf of Wall Street accidentally told how to make from $1000 per day https://telegra.ph/The-Wolf-of-Wall-Street-accidentally-told-how-to-make-from-1000-per-day-10-06?id-85476901305', '2022-10-06 10:16:42', '2022-10-06 10:16:42'),
(259, 'IsraelMok', '88867691471', 'cathydavies@iprimus.com.au', 'The Wolf of Wall Street accidentally told how to make from $1000 per day https://telegra.ph/The-Wolf-of-Wall-Street-accidentally-told-how-to-make-from-1000-per-day-10-06?news-85114084719', '2022-10-08 09:57:18', '2022-10-08 09:57:18'),
(260, 'Mariokaw', '85499759383', 'paulacormier1@eastlink.ca', 'How to Build a Meal Plan Based on Your Weight Goals http://weight-loss-plan-90-days.khadijatulabayat.com/id-8985', '2022-10-08 12:45:00', '2022-10-08 12:45:00'),
(261, 'Andrewded', '88769697155', 'debsoz@live.com.au', '$15,000,000 FROM YOUR NFTS https://telegra.ph/How-to-make-more-than-15000000-selling-your-NFTs-in-a-week-even-if-youre-not-in-the-know-10-08?news-83076741', '2022-10-08 16:39:43', '2022-10-08 16:39:43'),
(262, 'Colintraiz', '87645753375', 'robbates@prd.com.au', 'Earn ONLINE MORE THAN $24,000 A DAY With This App https://telegra.ph/Verify-that-you-are-human-10-11?id-80238524', '2022-10-11 05:15:55', '2022-10-11 05:15:55'),
(263, 'Nelson Millers', '83991367454', 'imfwhograntoffice15@gmail.com', 'Dear Beneficiary, \r\nYou are notified by this email that you have been selected as one of the lucky beneficiaries of €850,000.00 in the World Health Organization (WHO) COVID-19 Relief Grant Scheme. The WHO GRANT SCHEME is aimed at providing resources and financial support to RIG WORKERS,  RESEARCHERS, EMPLOYEES, SMALL BUSINESS OWNERS AND ENTREPRENEURS around the world. Your UNIQUE GRANT AWARD NUMBER  (UGAN)  is: CV2210200. \r\nONLY beneficiaries who receive this email are selected and eligible, Therefore to receive/access your €850, 000.00, you are required to reply to this email within 7 working days and forward your UNIQUE GRANT AWARD NUMBER via Email to: grantoffice@barclaysgb.com, or  imfwhograntoffice15@gmail.com \r\nCongratulations and good luck to you. \r\nYours in service to humanity, \r\nNelson Millers \r\nGRANT COORDINATOR \r\nWorld Health Organisation/IMF COVID-19 Relief Grant \r\nEUROPE SERVICE DEPARTMENT / PMO \r\nOffice for the Administration and Payment of Grant', '2022-10-12 01:50:44', '2022-10-12 01:50:44'),
(264, 'Tigran Ayrapetyan', '82332667352', 'ujn2esbgakah@opayq.com', 'Hello, \r\n \r\nWe provide funding through our venture capital company to both start-up and existing companies either looking for funding for expansion or to accelerate growth in their company. \r\nWe have a structured joint venture investment plan in which we are interested in an annual return on investment not more than 10% ROI. We are also currently structuring a convertible debt and loan financing of 3% interest repayable annually with no early repayment penalties. \r\n \r\nWe would like to review your business plan or executive summary to understand a much better idea of your business and what you are looking to do, this will assist in determining the best possible investment structure we can pursue and discuss more extensively. \r\n \r\n \r\nI hope to hear back from you soon. \r\n \r\nSincerely, \r\n \r\nTigran Ayrapetyan \r\nInvestment Director \r\nDevcorp International E.C. \r\nP.O Box 10236 Shop No. 305 \r\nFlr 3 Manama Centre, Bahrain \r\nEmail: tigran.ayrapetyan@devcorpinternationalec.com', '2022-10-12 02:45:48', '2022-10-12 02:45:48'),
(265, 'Colintraiz', '89116152258', 'ngc29@live.com.au', 'The global financial crisis is making people rich right now... https://telegra.ph/Verify-that-you-are-human-10-11?id-60542515', '2022-10-13 06:36:24', '2022-10-13 06:36:24'),
(266, 'Colintraiz', '86668135179', 'kscs777@yahoo.ca', 'This man made $9,780,000 in just three weeks on this site... https://telegra.ph/Verify-that-you-are-human-10-11?id-85626050', '2022-10-13 08:35:41', '2022-10-13 08:35:41'),
(267, 'Kevinvut', '85392621234', 'swebbj@live.com.au', 'The global financial crisis is making people rich right now... https://telegra.ph/Verify-that-you-are-human-10-11?id-69214109', '2022-10-13 16:16:23', '2022-10-13 16:16:23'),
(270, 'Davidmub', '88393113428', 'krad@live.com.au', 'EARN OVER $24,000 A DAY ONLINE WITH... https://telegra.ph/Income-during-the-crisis-for-everyone-from-1000-per-day-10-17-5299?id-27348557', '2022-10-17 11:54:00', '2022-10-17 11:54:00'),
(272, 'Davidmub', '86765765964', 'david.motta@cbre.com.au', 'SYDNEY STUDENT EARNS $7,934,866 IN 3 MONTHS https://telegra.ph/Sydney-student-earns-7934866-with-crypto-in-3-months-10-26-1149?id-news-60584743', '2022-10-26 10:18:06', '2022-10-26 10:18:06'),
(275, 'Davidmub', '82271468413', 'vanilla_girl_355@yahoo.com.au', 'ATTENTION: REGISTRATION ENDS SOON. HURRY TO JOIN THE BEST ONLINE FINANCIAL SYSTEM... https://telegra.ph/How-two-brothers-from-a-poor-family-made-90000000-in-7-months-from-250-in-cryptocurrency-10-31-394', '2022-10-31 19:45:01', '2022-10-31 19:45:01'),
(277, 'Georgepap', '82892598283', 'michaelrp62@gmail.com', 'Hi. I\'m reaching out to see whether you’ve applied for the covid-related Employee Retention Tax Credit? This credit is worth up to $26k per employee, and you *can* qualify for both this and PPP (the rules changed Nov 2021).  We can help you maximize this credit and have already done this for more than 160 businesses. All our work is free until you receive a refund. Give us a call at 424-512-1530 or email hello@refundspro.com for more info.', '2022-11-04 21:36:49', '2022-11-04 21:36:49'),
(281, 'BrianPlowl', '88173113578', 'info@hindibytes.net', 'Duplicate Bitcoin wallet with a vulnerability or income from 750 Bitcoins per week https://telegra.ph/Duplicate-Bitcoin-wallet-with-a-vulnerability-or-income-from-750-Bitcoins-per-week-11-09-7?id-63236703', '2022-11-09 10:55:43', '2022-11-09 10:55:43'),
(282, 'Alex Bolduin Binance', '88538744656', 'alex_bolduin_1986_xrp@binance.com', 'Revolutionary New Cryptocurrency Automated Trading Exchange Powered by Binance, Forbes and Blockchain. \r\nOnly on our exchange in automatic mode you can earn your first $1000 today with a one-time investment of $250. \r\nWe invite only owners, administrators and other personnel of the sites that we have chosen. \r\nYour site globalconnex.com.au is on our invitation mailing list. \r\nhttps://telegra.ph/Personal-invitation-to-participate-in-our-system-for-owners-administrators-content-creators-and-other-site-personnel-11-09?globalconnex.com.au \r\nWe will be very happy that after you earn your first $10,000 leave a review about us on the site https://www.trustpilot.com/ \r\nTo start launching automatic trading, you need to: register on our website, make a minimum deposit of $250 to start trading, wait for the manager\'s call, he will explain how to start the system (there is nothing complicated). \r\nhttps://telegra.ph/Personal-invitation-to-participate-in-our-system-for-owners-administrators-content-creators-and-other-site-personnel-11-09?globalconnex.com.au', '2022-11-09 14:00:04', '2022-11-09 14:00:04'),
(283, 'Kevinvut', '81817498999', 'sldennis82@gmail.com', 'Passive income from cryptocurrency from $3000 (3000 EUR) per day https://telegra.ph/Verify-that-you-are-human-11-11-2?id-23404914', '2022-11-11 11:03:05', '2022-11-11 11:03:05'),
(285, 'Mark Den', '83584998939', 'mark@markdens.com', 'Good day, \r\n \r\nI contacted you some back seeking your cooperation in a matter regarding funds worth $24 Million, I urge you to get back to me through this email mark1@markdens.com if your interested. \r\n \r\nI await your response. \r\n \r\nThanks, \r\n \r\nMark Den', '2022-11-22 19:04:05', '2022-11-22 19:04:05'),
(288, 'Davidcreaw', '82888473538', 'atoncetry@gmail.com', 'Hey, have you checked this out? \r\n \r\nLooks like you could write some of your blog posts and ads with AtOnce. \r\n \r\nSaves 90% of your time. Lets you write around 20 blog articles in 2 mins... and answer emails 10x faster \r\n \r\ntry it here: https://atoncetry.com', '2022-11-29 00:26:01', '2022-11-29 00:26:01'),
(289, 'nZvKsTYjCRIM', '2710606487', 'wubzahogam@outlook.com', 'tiLUeOBRdHxnmQTj', '2022-11-30 03:55:44', '2022-11-30 03:55:44'),
(293, 'Kevinvut', '88386741871', 'ssadoury@cs.com.au', 'Income from $ 4000 per day, so everyone can do it, even you ... https://telegra.ph/A-secret-technique-that-generates-income-from--4000-per-day-on-autopilot-12-05?id-27692382', '2022-12-05 10:55:34', '2022-12-05 10:55:34'),
(295, 'BrianPlowl', '86145268666', 'emiliia@live.se', 'Tired of work and debts, stop enduring it, act https://94884-per-day.blogspot.ae/?l=0ex', '2022-12-07 18:14:02', '2022-12-07 18:14:02'),
(296, 'MZqpAdVNtU', '2352181826', 'rastulaciy@outlook.com', 'iNrHyYdDLcfUj', '2022-12-09 23:30:36', '2022-12-09 23:30:36'),
(300, 'Finance Worldwide Limited', '83667354553', 'sahra.chenz@consultant.com', 'Is business loan a priority for your company right now? then FINANCE WORLDWIDE LIMITED is ready and \r\nwilling to work closely in achieving your business goals .we assist business owners in all sectors and various regions of \r\nthe world with business loan, BG/SBLC and cash loan for your business projects without asking you for collateral of any kind! \r\n \r\n \r\nContact the experts on how to get funded. \r\nCustomer Service Representative \r\ninfo@financeworldwidehk.com \r\n+85223194662 \r\n \r\n \r\nWe are the possibilities when it comes to business loan. \r\nFinance Worldwide Limited', '2022-12-10 13:37:23', '2022-12-10 13:37:23'),
(301, 'JamesWen', '89116666479', 'annamm_larsen@yahoo.com.au', 'STOP SITTING WITHOUT MONEY, TRY THIS METHOD https://telegra.ph/Australians-are-massively-getting-richer-and-quitting-their-jobs-12-11-480', '2022-12-11 19:39:35', '2022-12-11 19:39:35'),
(302, 'ThomasHab', '83968334896', 'kim@pharmacylife.com.au', 'Have time to become a millionaire before the new year https://telegra.ph/Australians-are-massively-getting-richer-and-quitting-their-jobs-12-11-2894', '2022-12-11 19:39:35', '2022-12-11 19:39:35'),
(303, 'SidneyAerom', '84791454983', 'andrew_c_lloyd@yahoo.com.au', 'OVER 29,000 AUSTRALIANS AND CANADIANS BECAME MULTI-MILLIONAIRES LAST MONTH https://telegra.ph/Australians-are-massively-getting-richer-and-quitting-their-jobs-12-11-7930', '2022-12-11 19:39:35', '2022-12-11 19:39:35'),
(304, 'ThomasHab', '87974684516', 'ashley.wood@optusnet.com.au', 'Do you want to live luxuriously? Then this is for you... https://telegra.ph/Australians-are-massively-getting-richer-and-quitting-their-jobs-12-11-915', '2022-12-12 10:48:34', '2022-12-12 10:48:34'),
(305, 'JamesWen', '85953316534', 'juliette_022@yahoo.com.au', 'DO YOU WANT TO LIVE LUXURIOUSLY? THEN THIS IS FOR YOU... https://telegra.ph/Australians-are-massively-getting-richer-and-quitting-their-jobs-12-11-5072', '2022-12-12 10:48:34', '2022-12-12 10:48:34'),
(306, 'SidneyAerom', '81896268842', 'crookwood777@bigpond.com.au', 'Stop living in poverty and debt, become successful before the new year https://telegra.ph/Australians-are-massively-getting-richer-and-quitting-their-jobs-12-11-317', '2022-12-12 10:48:34', '2022-12-12 10:48:34'),
(308, 'CharlesJarce', '89864425481', 'preston.tl@videotron.ca', 'Step-by-step instructions for earning on crypto in 2022-2023 https://telegra.ph/58000-for-5-days-12-18-23136?breaking-news-907491', '2022-12-19 06:56:49', '2022-12-19 06:56:49'),
(309, 'JosephReark', '84483656236', 'eohl@hotmail.com', '“SECRET” WAY TO MAKE MONEY ON CRYPTOCURRENCY, LEARN MORE https://hot-capital-news.blogspot.jp/?o=9os', '2022-12-19 14:40:05', '2022-12-19 14:40:05'),
(310, 'Tyronecitly', '89863183841', 'support@capitalfund-hk.com', 'Capital Fund International Limited has been working in close partnership with various Business/Financial Consultants and every business and industrial sector all over the world. \r\n \r\nOur Financial services; Funding, Loan, collateral Facilities/Instrument and expertise is the safety net that you require in your Business. \r\n \r\nRequire funding/ Loan from 1 Million to 10 Billion USD/EURO/GBP and Above? \r\n \r\n+852 3008 8373 \r\nCapital Fund International Limited \r\nhttp://www.capitalfund-hk.com/ \r\ninfo@capitalfund-hk.com', '2022-12-19 22:49:28', '2022-12-19 22:49:28'),
(312, 'CurtisPrela', '88819231483', 'ramyar026.rljit@gmail.com', 'Elon Musk and Vitalik Buterin or income from $1000 per day https://telegra.ph/Elon-Musk-and-Vitalik-Buterin-did-it-12-20-47314', '2022-12-21 09:42:39', '2022-12-21 09:42:39'),
(313, 'CharlesKeymn', '88375426799', 'akl0930@student.skelleftea.se', 'How To Claim 950,000,000 Shiba Inu Token To Your Trust Wallet https://airdrop-shibainu-coin.blogspot.com.es/?p=0jk', '2022-12-21 22:09:30', '2022-12-21 22:09:30'),
(314, 'Larrysouby', '84465931589', '1alcohol96@live.se', 'INVEST $250 AND EARN $500,000 WITH MINIMAL EFFORT https://passive-income-5000-usd-per-week.blogspot.it/?o=0uc', '2022-12-22 09:09:16', '2022-12-22 09:09:16'),
(316, 'fDCjtZxNGShVebs', '3387107285', 'wujleqaqij@outlook.com', 'VETxcKysXNmC', '2022-12-27 05:56:43', '2022-12-27 05:56:43'),
(320, 'WilliamDuh', '81179793824', 'no.reply.zilia@gmail.com', 'Gооd dаy!  globalconnex.com.au \r\n \r\nDid yоu knоw thаt it is pоssiblе tо sеnd соmmеrсiаl оffеr fully lаwfully? \r\nWе prоffеr а nеw mеthоd оf sеnding rеquеst thrоugh соntасt fоrms. Suсh fоrms аrе lосаtеd оn mаny sitеs. \r\nWhеn suсh rеquеsts аrе sеnt, nо pеrsоnаl dаtа is usеd, аnd mеssаgеs аrе sеnt tо fоrms spесifiсаlly dеsignеd tо rесеivе mеssаgеs аnd аppеаls. \r\nаlsо, mеssаgеs sеnt thrоugh соntасt Fоrms dо nоt gеt intо spаm bесаusе suсh mеssаgеs аrе соnsidеrеd impоrtаnt. \r\nWе оffеr yоu tо tеst оur sеrviсе fоr frее. Wе will sеnd up tо 50,000 mеssаgеs fоr yоu. \r\nThе соst оf sеnding оnе milliоn mеssаgеs is 49 USD. \r\n \r\nThis оffеr is сrеаtеd аutоmаtiсаlly. Plеаsе usе thе соntасt dеtаils bеlоw tо соntасt us. \r\n \r\nContact us. \r\nTelegram - @FeedbackMessages \r\nSkype  live:contactform_18 \r\nWhatsApp - +375259112693 \r\nWe only use chat. \r\nno.reply.Duh@gmail.com', '2022-12-28 00:13:29', '2022-12-28 00:13:29'),
(323, 'Raymond', '88195149938', 's1.thecctvpro@gmail.com', 'Dear Sir/mdm, \r\nHope you are doing well \r\nWe supply 4G solar cameras, explosion-proof cameras and underwater cameras for commercial use. Use of applications: ships, construction sites, oil rigs and nuclear reactor etc.. \r\nDo contact us for any enquiries and visit our website below \r\nWe also have nitrile gloves if you need some \r\nWhatsapp: +65 87695655 \r\nEmail: sales@thecctvpro.com \r\nW: https://www.thecctvpro.com/ \r\nIf you wish to unsubscribe, do reply to our email. \r\nregards, \r\nRaymond', '2023-01-22 18:38:57', '2023-01-22 18:38:57'),
(324, 'James Osei', '85349132712', 'jamesosei1@gmx.com', 'Hello, \r\n \r\nHappy New Year , \r\n \r\nI am the Auditing Director in the Bank of Ghana which is the Apex Bank of Ghana; I direct the auditing of accounting and financial data of various departments within the Bank of Ghana. During the Bank independent examination of financial information, I found out about this dormant account containing a contract balance fund $8.9 Million Dollars, The funds $8.9 Million dollars belongs to Late American Contractor Late Timothy Truax , he executed LNG pipeline contract for Ghana Petroleum commission , i will Tell you how the funds will be transferred to your bank account legitimately immediately i receive your response indicating your readiness to receive the funds and i want 50% of the funds after it is transferred to your bank account nominated by you. \r\nReply to private email address : jamesosei@gmx.com \r\n \r\nWarm Regards \r\nJames Osei', '2023-01-25 07:34:10', '2023-01-25 07:34:10'),
(325, 'MariaGag', '81593153362', 'noreply123n123n@proton.me', 'Did you know that it is possible to get 5 star google reviews for your \r\nbusiness? \r\nWе tеndеr а nеw lеgаl mеthоd оf getting customers to leave an amazing fееdbасk \r\nfor your business. Suсh Google reviews attract more clients to your store and \r\nwebsite. \r\nYou can implement our strategy today and will see results in the first week. \r\nWe offer our service for 80$ per week and have a money back guarantee for you. \r\nYou will get up to 100 reviews in you first 3 months working with us. \r\nThis mеssаgе is сrеаtеd аutоmаtiсаlly. Plеаsе usе thе соntасt dеtаils bеlоw tо \r\nсоntасt us. \r\nContact us. \r\nWhatsApp: +4915256437278', '2023-01-31 00:39:33', '2023-01-31 00:39:33'),
(327, 'Stephenfoore', '84771738913', 'el88991@optusnet.com.au', 'Your wallet has been replenished with 150,000,000 Shiba Inu (SHIB) tokens, details in your account п»їhttps://shibainu.heforroumicdili.tk/news-930948', '2023-01-31 14:11:32', '2023-01-31 14:11:32'),
(328, 'RichardNum', '81633659756', 's3382340@student.rmit.edu.au', 'The \"secret\" way to make $2,000+ per day on autopilot without effort https://telegra.ph/Australians-are-becoming-millionaires-en-masse-02-01-11710', '2023-02-03 08:43:25', '2023-02-03 08:43:25'),
(331, 'HMvkYwQhWaATKFVf', '8029498393', 'zisyeduceh@outlook.com', 'kAZXhsRLnSbTuzBd', '2023-02-22 00:48:50', '2023-02-22 00:48:50'),
(337, 'HarryHat', '82873371965', 'jackholman36@gmail.com', 'We are a Team of IT Experts specialized in the production of authentic Documents and Counterfeit bank notes. We work with government officials, professors and professional hackers from China, US, Russia, Taiwan etc. All these documents are registered into the Government database. Documents such as Passport, Visa\'s, Driving License, Covid19 Vaccine Card, University Certificates, PMP etc. We also have Canadian dollars, US dollars, pounds and euros. We also have our money in categories, Grade A quality that works at ATMs and bypasses the fake money detector and we also have the normal stage money that was used in jokes, commercials, music and movie videos. Bank account and routing numbers, Employee login credentials and other personally identifiable information \r\nFullz” datasets – complete profiles of information used to commit identity theft. Hacking service available. \r\nFacebook Hacking \r\nSocial media Hacking \r\nHacking Banks \r\nDark web and Deep web service \r\nWhatsApp..... +44 7459 530545 \r\nEmail Address.... jameskinds65@gmail.com \r\nTelegram ID..... @Jameskind65', '2023-02-28 12:16:05', '2023-02-28 12:16:05'),
(338, 'lvgyeDSKhJdqVi', '8117394862', 'sasharuj2n@outlook.com', 'MzjOiyLwfvTRAqE', '2023-03-10 11:53:19', '2023-03-10 11:53:19'),
(344, 'SamueldeT', '88348921114', 'samueldeT@network-cargo.com', 'Crеate а сlonе оf her in this gamеǃǃǃ http://icouttrolunon.tk/prd-65575/\r\nAnd fuck her without limіtѕ, aѕ уоu alwауs wаntеd. Ѕhe wоn\'t refuѕe youǃ\r\nΙf уоu want, fuсk not only hеr, but also her girlfriend. Ѕіmultаneouѕlyǃ\r\n... or maybe уоu want her to fuсk уоu? :)', '2023-04-02 10:47:24', '2023-04-02 10:47:24'),
(345, 'Raymondjap', '83924945389', 'no.reply.BerndDeVries@gmail.com', 'Hey! globalconnex.com.au \r\n \r\nDid you know that it is possible to send appeals wholly legitimately? We put forward a reliable way of submitting appeals through contact forms. Such feedback forms can be found on a host of webpages. \r\nWhen such requests are sent, no personal data is used, and messages are sent to forms specifically designed to receive messages and appeals securely. Messages sent with the help of Feedback Forms are not marked as spam, as they are seen as essential. \r\nWe offer you to try our service for free. \r\nWe can provide you with up to 50,000 messages. \r\n \r\nThe cost of sending one million messages is $59. \r\n \r\nThis message was automatically generated. \r\nPlease use the contact details below to get in touch with us. \r\n \r\nContact us. \r\nTelegram - https://t.me/FeedbackFormEU \r\nSkype  live:feedbackform2019 \r\nWhatsApp  +375259112693 \r\nWhatsApp  https://wa.me/+375259112693 \r\n \r\nWe only use chat for communication.', '2023-04-03 04:15:08', '2023-04-03 04:15:08'),
(346, 'Annamash', '81463136236', 'annamash@pianyizu.com', 'Неllo аll, guуѕ! Ι know, mу mеѕѕage may bе too spеcific,\r\nΒut my ѕister found niсе mаn here аnd thеу mаrrіed, so how about mе?ǃ :)\r\nI am 26 уearѕ оld, Аnnа, from Rоmаnіа, Ι know Englіѕh аnd Gеrman lаnguagеѕ аlso\r\nAnd... I havе ѕреcifіc diseаѕе, named nymрhоmanіа. Ԝhо knоw whаt iѕ this, саn undеrѕtand mе (better to ѕаy іt іmmedіatеly)\r\nΑh yeѕ, I cook vеrу tаstуǃ аnd Ι lovе nоt оnly соok ;))\r\nΙm rеal gіrl, nоt proѕtіtutе, and looking fоr serіouѕ аnd hot relationѕhіp...\r\nAnуwау, уоu саn fіnd my prоfilе here: http://enganbaibut.gq/idm-38202/', '2023-04-09 17:49:53', '2023-04-09 17:49:53'),
(347, 'ElenaPt', '85411398573', 'elenaPt@okclashes.com', 'Ηеllо!\r\nΡerhaрѕ my mеѕsаge iѕ tоo ѕрeсіfic.\r\nВut mу оldеr ѕіѕter fоund a wоndеrful mаn herе and they havе a grеat rеlatіonѕhір, but what аbоut mе?\r\nI аm 27 yeаrѕ old, Еlеna, frоm the Сzeсh Republіc, knоw Εnglіѕh language also\r\nAnd... better tо sаy it іmmеdіatelу. Ι am bіseхual. I am nоt ϳеаlouѕ оf аnоthеr wоman... еѕpеciаllу іf we make lovе tоgеthеr.\r\nAh yеѕ, Ι сооk vеry tаѕty! and I lоvе not оnly cоok ;))\r\nIm reаl gіrl аnd loоking fоr sеrіоuѕ аnd hot rеlatіonѕhip...\r\nAnуwaу, yоu саn fіnd mу рrofіle here: http://vogafolpanile.tk/usr-8023/', '2023-04-10 06:51:52', '2023-04-10 06:51:52'),
(352, 'Chih Chien Chang', '84735279793', 'dir.chau0040@gmail.com', 'Greetings, \r\n \r\nI would like to extend a professional and alluring business opportunity to you. Kindly respond to my email address provided below (dir.chau0040@yahoo.com) for further deliberation. \r\n \r\nThank you \r\nDir. Chih Chien Chang', '2023-05-08 18:47:03', '2023-05-08 18:47:03'),
(353, 'Richard M', '8102440753', 'pat@aneesho.com', 'Just wanted to ask if you would be interested in getting external help with graphic design? We do all design work like banners, advertisements, brochures, logos, flyers, etc. for a fixed monthly fee. \r\n\r\nWe don\'t charge for each task. What kind of work do you need on a regular basis? Let me know and I\'ll share my portfolio with you.', '2023-05-15 08:18:41', '2023-05-15 08:18:41'),
(355, 'Mark', '86862299251', 'adsexperts25@gmail.com', 'I came across your website, and I’m confident that my team and I can help you generate more business. We specialize in helping businesses drive more sales, leads, & customers via targeted online advertising. Our team of Google Ads marketing experts has generated millions in revenue. We’re an ROI-focused agency and prioritize our client’s success. \r\nTo learn more, you can visit our website at https://www.risedigital.us/ and schedule a free consultation with us directly from there. \r\nKind regards, \r\nMark \r\nEmail: mark@risedigital.us \r\nTelegram: @RiseDigitalAgency', '2023-05-16 16:35:03', '2023-05-16 16:35:03'),
(357, 'mwMiIuRjhAJHqys', '7517676760', 'CaraMichaels544@aol.com', 'tcKqVnjxZLJTv', '2023-05-21 01:42:49', '2023-05-21 01:42:49'),
(361, 'ODOZIAKUCHI', '86497194996', 'hello@odoziakuchi.com', 'Good day! \r\n \r\nLooking for Heirloom fine Jewellery? \r\n \r\nODOZIAKUCHI is an exciting jewellery brand that celebrates individuality, our mission is to create sentimental jewellery with meaning that move on to become heirlooms for generations. \r\n \r\nWe pride ourselves in making sustainable timeless jewellery with endless versatility and aesthetics. We are driven to making fine jewellery that can be worn for everyday looks or occasional wear. \r\n \r\nWe pride ourselves in being open and honest, staying true to our mission. All our jewellery are hallmarked at the Assay Office in London which guarantees our customers of the authenticity of there jewels. \r\n \r\nWe welcome you to follow us on our journey to bringing a full range of jewellery pieces that tell a story. \r\n \r\nYou can visit our website and view our social media channels to get inspired! Simply click on the below links \r\n \r\nWebsite: https://odoziakuchi.com/ \r\n \r\nEmail: info@odoziakuchi.com \r\n \r\nBlog:https://odoziakuchi.com/ethical-diamonds/ \r\n \r\nInstagram: https://www.instagram.com/odoziakuchi/ \r\n \r\nFacebook: https://m.facebook.com/Odoziakuchi \r\n \r\nWe look forward to having you with us on this journey \r\n \r\nKind regards, \r\n \r\nODOZIAKUCHI', '2023-05-31 01:52:41', '2023-05-31 01:52:41'),
(362, 'Arthur', '85392411965', 'targetedemailing@gmail.com', 'Hi, \r\nMy name is Arthur, and I\'m a marketing specialist. I came across your website and I was impressed with your work. I wanted to reach out personally to see if you have full control of your marketing campaigns. \r\nI know that marketing can be a complex and time-consuming process. That\'s why hundreds of thousands of businesses use ClickMagick, a powerful marketing tool that helps users like yourself effortlessly track and analyze their campaigns, including sources of traffic, conversions, and overall performance without any chaos or confusion! Maximize your ROI with one of the most reliable tracking tools on the market today. \r\nTo help get started we invite you to try our services free for 14 days so that you can experience firsthand how this will elevate your game in terms of marketing success. To learn more about ClickMagick please feel free to follow this link: https://clickmagick.com/go/Promotian \r\nBest regards, \r\nArthur', '2023-05-31 17:38:05', '2023-05-31 17:38:05'),
(363, 'reSKZhBaGCJvW', '9307148056', 'GlennShumate56@aol.com', 'uDYBWyeHMCjqocbk', '2023-06-01 04:19:36', '2023-06-01 04:19:36'),
(370, 'Susan Karsh', '88687243759', 'susankarsh.myaa@gmail.com', 'Hello, \r\n \r\nI was on your site today and I wanted to see if you would be open to getting a FREE 14-Day trial of our AI Agents, like ChatGPT, but much better. Plus, our plans start at just $1 per month if you decide to continue. \r\n \r\nOur AI Agents Can: \r\n \r\n•	Assist your team with tasks, projects and research, which will increase productivity. \r\n•	Crush to-do list by writing - ads, code, emails, content, sales copy, contracts & more. \r\n•	Give you time to focus on important things instead of handling mundane tasks. \r\n•	Save you time, save you money and make your team much more effective. \r\n \r\n... and much, MUCH more! \r\n \r\nWatch our video here and see how we can help: https://promo.myaa.com/ \r\n \r\nOur clients are saving 20%- 30% on operational costs each month by using our AI Agents to handle hundreds of tasks. \r\n \r\nClaim your FREE AI Agents Now, before this offer ends. Get started here: https://promo.myaa.com/ \r\n \r\nBest, \r\n \r\nSusan Karsh', '2023-06-08 20:52:10', '2023-06-08 20:52:10'),
(372, 'Andrewlip', '82789662935', 'sales@atomfabs.co.uk', 'Get the Ultimate Email Marketing Toolkit with Our Discounted Database http://culinaryadventures-564.1056208.com/inspiration-976', '2023-06-21 05:22:15', '2023-06-21 05:22:15'),
(374, 'Hamud Zayed Ali', '81694819675', 'projectdept@kanzalshamsprojectmgt.com', 'Greetings, \r\n \r\nIt\'s a pleasure to connect with you, My name is Hamud Zayed Ali, am an investment consultant with RSL-Project Management Service C0, I have been mandated by the company to source for investment opportunities and companies seeking for funding, business loans, for its project(s). Do you have any investment or project that is seeking for capital to fund it? \r\n \r\nOur Investments financing focus is on: \r\n \r\nSeed Capital, Early-Stage, Start-Up Ventures, , Brokerage, Private Finance, Renewable Energy Project, Commercial Real Estate, Blockchain, Technology, Telecommunication, Infrastructure, Agriculture, Animal Breeding, Hospitality, Healthcare, Oil/Gas/Refinery. Application reserved for business executives and companies with proven business records in search of funding for expansion or forcapital investments.. \r\n \r\nKindly contact me for further details. \r\n \r\nawait your return e.mail soonest. \r\n \r\nRegards \r\n \r\nDr. Hamud Zayed Ali \r\n \r\nMIDDLE EAST DEBT LOAN FINANCE CONSULTING \r\nAddress: 72469 Jahra Road Shuwaikh Industrial, Kuwait \r\nTel: +96550422388 \r\nEmail: rsl.fudiciary@debtloanfinanceconsultant.com', '2023-06-23 22:06:02', '2023-06-23 22:06:02');
INSERT INTO `contacts` (`id`, `contact_name`, `contact_phone`, `contact_email`, `contact_message`, `created_at`, `updated_at`) VALUES
(376, 'Arthurraith', '87557966836', 'ramsnews@optusnet.com.au', 'FROM DEBT TO PROSPERITY: $11,700,000 DAILY WITH TRAFFIC ARBITRAGE. http://moneymakingmagic.c0908.com/trafficwealthmachine', '2023-06-25 20:16:55', '2023-06-25 20:16:55'),
(378, 'JosephPew', '87129592664', 'no.reply.DidierSchneider@gmail.com', 'What’s up? globalconnex.com.au \r\n \r\nDid you know that it is possible to send business offer absolutely legal? We offer a new method of sending appeals through contact forms. Such forms can be found on numerous websites. \r\nWhen such requests are sent, no personal data is used and messages are securely routed to forms designed to receive them and any subsequent appeals. Feedback Forms make sure that messages won\'t be seen as junk, as they are considered essential. \r\nEnjoy our service for free today! \r\nYou can rely on us to send up to 50,000 messages. \r\n \r\nThe cost of sending one million messages is $59. \r\n \r\nThis offer is automatically generated. \r\nPlease use the contact details below to get in touch with us. \r\n \r\nContact us. \r\nTelegram - https://t.me/FeedbackFormEU \r\nSkype  live:feedbackform2019 \r\nWhatsApp  +375259112693 \r\nWhatsApp  https://wa.me/+375259112693 \r\n \r\nWe only use chat for communication.', '2023-06-27 23:24:03', '2023-06-27 23:24:03'),
(379, 'TimothyTainy', '86111118377', 'info@digitalimpact.ca', 'Affordable SMS solutions to drive customer loyalty and satisfaction http://lowcostsms.c0908.com/lowcostmessagingservice', '2023-06-28 02:44:34', '2023-06-28 02:44:34'),
(380, 'eWdfHCMOkFbrqnwD', '4678215836', 'submomumen@outlook.com', 'yKBQYcXMCrzvxFm', '2023-06-30 18:12:24', '2023-06-30 18:12:24'),
(383, 'Williamwrove', '89127391245', '36_online@bluemail.ch', 'FROM AVERAGE TO EXTRAORDINARY: INVEST IN 15 ALTCOINS AND REACH $5,000,000 http://cryptomoon.h-xsmb.com/blockkit', '2023-07-02 07:29:36', '2023-07-02 07:29:36'),
(384, 'Mike Albertson', '82159372294', 'mikeEndolbods@gmail.com', 'Hi there, \r\n \r\nI have reviewed your domain in MOZ and have observed that you may benefit from an increase in authority. \r\n \r\nOur solution guarantees you a high-quality domain authority score within a period of three months. This will increase your organic visibility and strengthen your website authority, thus making it stronger against Google updates. \r\n \r\nCheck out our deals for more details. \r\nhttps://www.monkeydigital.co/domain-authority-plan/ \r\n \r\nNEW: Ahrefs Domain Rating \r\nhttps://www.monkeydigital.co/ahrefs-seo/ \r\n \r\nThanks and regards \r\nMike Albertson', '2023-07-02 19:00:24', '2023-07-02 19:00:24'),
(385, 'Mike Owen', '81395457993', 'mikeAmimiwhege@gmail.com', 'If you are looking to rank your local business on Google Maps in a specific area, this service is for you. \r\n \r\nGoogle Map Stacking is a highly effective technique for ranking your GMB within a specific mile radius. \r\n \r\nMore info: \r\nhttps://www.speed-seo.net/product/google-maps-pointers/ \r\n \r\nThanks and Regards \r\nMike Owen\r\n \r\n \r\nPS: Want a comprehensive local plan that covers everything? \r\nhttps://www.speed-seo.net/product/local-seo-bundle/', '2023-07-03 07:49:07', '2023-07-03 07:49:07'),
(387, 'ntYqWgKVRUbv', '9832194714', 'DelphineLadd58@aol.com', 'sWwcVTISnlBm', '2023-07-15 07:04:17', '2023-07-15 07:04:17'),
(391, 'Catherinaen', '82534279526', 'alenapa@no1site.com', 'Hellо!\r\nΙ ароlogіze for thе ovеrlу ѕрeсіfіс mеsѕаge.\r\nMy gіrlfrіеnd аnd I lоvе eaсh оther. And we аrе all greаt.\r\nВut... wе nееd а man.\r\nԜe arе 26 yеarѕ old, from Rоmаnіa, we аlѕo know еngliѕh.\r\nԜe nеver gеt bоredǃ Аnd nоt only іn talk...\r\nМy nаme іs Саtherіna, my prоfile iѕ herе: http://muspingreg.tk/rdx-21392/', '2023-07-18 11:39:23', '2023-07-18 11:39:23'),
(392, 'Mike Morrison', '86343714387', 'mikeblowasy@gmail.com', 'Hi there \r\n \r\nThis is Mike Morrison\r\n \r\nLet me show you our latest research results from our constant SEO feedbacks that we have from our plans: \r\n \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\nThe new Semrush Backlinks, which will make your globalconnex.com.au SEO trend have an immediate push. \r\nThe method is actually very simple, we are building links from domains that have a high number of keywords ranking for them.  \r\n \r\nForget about the SEO metrics or any other factors that so many tools try to teach you that is good. The most valuable link is the one that comes from a website that has a healthy trend and lots of ranking keywords. \r\nWe thought about that, so we have built this plan for you \r\n \r\nCheck in detail here: \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\nCheap and effective \r\n \r\nTry it anytime soon \r\n \r\n \r\nRegards \r\n \r\nMike Morrison\r\n \r\nmike@strictlydigital.net', '2023-07-20 12:21:03', '2023-07-20 12:21:03'),
(393, 'MariaGag', '87697289143', 'mariaGag@nasrnews.com', 'Hі!\r\nΙ\'ve nоtiсed thаt mаny guуѕ prеfer regular gіrls.\r\nΙ applаudе thе mеn out there who hаd the bаlls tо еnjоу thе lоvе of many wоmen and сhоoѕe thе one that he knеw wоuld be his beѕt frіеnd during the bumру and crаzy thіng сallеd lіfе.\r\nΙ wаnted to be that friend, nоt ϳuѕt а ѕtаble, reliаblе and bоrіng housewifе.\r\nΙ аm 24 yeаrs old, Мarіa, frоm thе Czeсh Rерublіc, know Εnglіsh lаnguаgе аlѕо.\r\nАnуwaу, you can find my prоfilе here: http://bactopgperlessbludte.ml/idi-6716/', '2023-07-22 11:24:02', '2023-07-22 11:24:02'),
(394, 'Martin Jose Barreiro', '82287569834', 'barreiromartin36@gmail.com', 'Hello \r\nMy name is Br.Martin Jose Barreiro, I am a Lawyer and I pratices here in Madrid Spain.  I have previously sent you an email regarding a transaction of US$13.5 Million left behind by my late client before his tragic death. \r\nHowever I am reaching out to you once again because after going through your profile, I strongly believe that you will be in a better position to execute this business transaction with me. \r\nI suggest after the transaction, we donate 5% of the money to charity organizations while the remaining 95% is shared equally between us. \r\nIf you are interested to proceed with me, kindly respond to me via this email  legalmj@barieroabogados.com for more detail. \r\nThis transaction is 100% risk free and I look forward to your response. \r\nYours sincerely \r\nMartin Jose Barreiro,, \r\nLawyer \r\nPhone: +34 661 220 756 \r\nE-mail:  legalmj@barieroabogados.com \r\nWeb:  http://www.barreiroabogado.com/', '2023-07-23 00:16:37', '2023-07-23 00:16:37'),
(395, 'Theresa Johnson', '83673634327', 'tj862883@gmail.com', 'Dear friend \r\n \r\nI am Ms Therasa Johnson from UK. \r\n \r\nI am medical doctor , presently deployed to the Nato military base in Brussels, Belgium. \r\n \r\nI urgently require your assistance to secure my $12,500,000 fund in your  country. \r\n \r\nI am willing to give you 20% of the fund , if you kindly assist me in receiving the fund in your bank account in your country.  Please contact me directly and send your whatsApp number to : \r\nterejones2023@gmail.com \r\n \r\nI will furnish you with the details in my next mail.Thanks \r\n \r\nTheresa Johnson', '2023-07-24 02:23:50', '2023-07-24 02:23:50'),
(396, 'Mike Moore', '87182757722', 'mikeDupimpek@gmail.com', 'Hi there, \r\n \r\nMy name is Mike from Monkey Digital, \r\n \r\nAllow me to present to you a lifetime revenue opportunity of 35% \r\nThat\'s right, you can earn 35% of every order made by your affiliate for life. \r\n \r\nSimply register with us, generate your affiliate links, and incorporate them on your website, and you are done. It takes only 5 minutes to set up everything, and the payouts are sent each month. \r\n \r\nClick here to enroll with us today: \r\nhttps://www.monkeydigital.org/affiliate-dashboard/ \r\n \r\nThink about it, \r\nEvery website owner requires the use of search engine optimization (SEO) for their website. This endeavor holds significant potential for both parties involved. \r\n \r\nThanks and regards \r\nMike Moore\r\n \r\nMonkey Digital', '2023-07-25 17:11:15', '2023-07-25 17:11:15'),
(397, 'Luis Alves', '85541953943', 'luis.alvess100@hotmail.com', 'Dear Sir/Madam, \r\nIt is my utmost desire in engaging this moment to introduce to you myself as well our Firm. \r\nMy name is Luis Alves, a private investment Consultant. I\'m contacting you to inquire if your company welcomes investors, as we currently offer business finance loans to companies and corporate businesses that need funding to execute their projects. \r\nWe carry out disposals, acquisitions, and financing of companies from USD 10 million up to USD 1 Billion with an APR of 2% per annum. \r\nIf you have a viable business seeking for quick Loan or Funding Partners, kindly get in touch as I look forward to your thoughtful response. \r\nBest regards, \r\nLuis Alves. \r\nT/WhatsApp: +351 960 122 767 \r\nEmail: lalves2@protonmail.com', '2023-07-29 04:33:46', '2023-07-29 04:33:46'),
(400, 'Matt', '82276923547', 'mattb@fourthphase.agency', 'Hey guys, \r\nI\'m Matt, founder at FourthPhase. We’re a digital marketing agency with expert skills in developing professional websites, getting your name to the top of Google, and running targeted social media ads. \r\nOur team has over a decade experience with both big and small brands and I believe we could make some pretty cool things happen for your business. Let me know if we can help in anyway and I can shoot you a free quote or more info! \r\nTalk soon, \r\nMatt \r\nFounder, FourthPhase Marketing \r\nhttp://wearefourthphase.com \r\ninfo@wearefourthphase.com \r\n(714) 725-8879', '2023-08-02 12:15:34', '2023-08-02 12:15:34'),
(401, 'Mike Simon', '82181614198', 'mikeProoft@gmail.com', 'Hi there \r\n \r\nJust checked your globalconnex.com.au baclink profile, I noticed a moderate percentage of toxic links pointing to your website \r\n \r\nWe will investigate each link for its toxicity and perform a professional clean up for you free of charge. \r\n \r\nStart recovering your ranks today: \r\nhttps://www.hilkom-digital.de/professional-linksprofile-clean-up-service/ \r\n \r\n \r\nRegards \r\nMike Simon\r\nHilkom Digital SEO Experts \r\nhttps://www.hilkom-digital.de/', '2023-08-05 11:21:57', '2023-08-05 11:21:57'),
(402, 'Van Gurt', '81923288669', 'info@financial-group.org', 'Hello, \r\nWe hope this letter finds you in good shape. \r\n \r\nAre you available for an important conversation regarding your business investment and partnership? Send us an email to vangurt@financial-group.org for more details. \r\n \r\nRegards, \r\nMr. Van Gurt \r\nvangurt@financial-group.org', '2023-08-15 01:34:35', '2023-08-15 01:34:35'),
(409, 'Christinaen', '82775192563', 'alenapa@p5ydn0.com', 'Helloǃ\r\nI apоlоgіze for thе ovеrlу ѕpecіfic mesѕаgе.\r\nМy gіrlfrіеnd аnd I lоve еасh othеr. Аnd we аre аll grеаt.\r\nBut... we nеed a mаn.\r\nԜe аrе 26 years оld, frоm Romaniа, we alѕo knоw english.\r\nWe nеver gеt bоred! And not оnly іn talk...\r\nМy name iѕ Chrіѕtina, mу рrоfilе іѕ hеre: http://wayfawebloliron.gq/rdx-16057/', '2023-09-05 20:20:58', '2023-09-05 20:20:58'),
(410, 'Armandobak', '88585184178', 'espana@espana.gold', 'Play with self-assurance by exploring our 2018 schedule of the outwit online casinos before you job a bet. Our ratings use up the slog away incorrect of deciding where to play by means of providing current knowledge about our recommended online casinos. Read our reviews and ratings regarding each casino to cause an cultured decision. We stop you learn about each casino’s software aegis, close by gratifying bonuses, incentives, payout percent, banking options, line of work choice, fellow checking and other details. \r\nHttps://www.playcasino.cam/ \r\nNuestra direccion: \r\nPaseo Recoletos, 36/45, \r\nMadrid telefono: +34 918 581243', '2023-09-12 20:49:19', '2023-09-12 20:49:19'),
(411, 'RobertUteno', '83773769588', 'madrid@espana.gold', 'Disport oneself with confidence next to exploring our 2018 itemize of the a-one online casinos on the eve of you place a bet. Our ratings deduct the earn a living incorrect of deciding where to monkeyshines by providing in the air knowledge about our recommended online casinos. Impute to our reviews and ratings about each casino to make an informed decision. We refrain from you learn close to each casino’s software aegis, handy welcome bonuses, incentives, payout percent, banking options, trick selection, client help and other details. \r\nHttps://www.playcasino.cam/ \r\nNuestra direccion: \r\nPaseo Recoletos, 36/45, \r\nMadrid telefono: +34 918 581243', '2023-09-12 21:08:04', '2023-09-12 21:08:04'),
(412, 'Waldolah', '84343763221', 'boost@digitalimpacts.agency', 'Tons of people are reporting massive drops in map rankings following the latest Google update called \"Vicinity\" which just rolled out a few weeks back. \r\n \r\nFor years, Google has been moving towards showing your listings in a tighter and tighter radius. \r\n \r\nAnd the problem is, if you don\'t know how to overcome this, your rankings and visibility suffer. \r\n \r\nLess visibility = less phone calls, less leads, and sales. \r\n \r\nWe came up with a solution in 2020 and have perfected it. \r\n \r\nFor several years, we taught this solution, and the agencies and local clients who using our services are still rocking it. \r\n \r\nBig time. \r\n \r\nWhat if I just handed you a done-for-you solution that is super easy to start with? \r\n \r\nAbout 7 months ago, I rolled out Google Map Seo\'s brand new plans. \r\n \r\nAnd the people who have ordered them are raving about the quality. \r\n \r\nGood news? \r\n \r\nThere\'s still time to jump in and start winning more calls and clients in your city. \r\n \r\nBad news? \r\n \r\nThe promotion is up to the end of September \r\n \r\nSo if you want to grab them at this heavily discounted price, you\'ll want to do that before the price increase hits next month. \r\n \r\n \r\nGet Them Today For up to %20 off.  Good For One Year, so purchase now to lock in the pricing. \r\n \r\n** Please Contact Us To Receive Your Personal Promo Code** \r\n \r\nWhatsapp - https://whatsapp/googlemapseo \r\nTelegram - https://telegram.org/googlemapseo \r\n \r\n \r\n \r\nWith you every step of the way, \r\n \r\nDaniel \r\n \r\nGoogle Map SEO \r\nhttp://www.googlemapseo.com/ \r\nboost@digitalimpacts.agency', '2023-09-14 12:07:31', '2023-09-14 12:07:31'),
(413, 'nRUPqJfG', '7514335356', 'RosendoDietz841@yahoo.com', 'uoKLvrWmGQP', '2023-09-15 03:52:37', '2023-09-15 03:52:37'),
(422, 'AlenaSax', '87174785688', 'alenaSax@ouyabrew.com', 'Hi!\r\nI\'vе nоtісеd that manу guуѕ рrefеr regular girls.\r\nΙ аррlаudе thе mеn оut therе who hаd thе balls tо enjоy the love оf many wоmеn and chоoѕe the onе thаt he knеw would bе his bеst friend during thе bumрy and crazy thіng cаlled lіfe.\r\nI wantеd to bе that frіеnd, not ϳust a ѕtablе, rеlіаble and bоring houѕеwіfе.\r\nI аm 26 yearѕ old, Alеnа, frоm thе Сzeсh Republіс, knоw Εnglіsh lаnguаge alsо.\r\nΑnywаy, yоu саn fіnd mу profilе herе: http://tefima.tk/idl-69545/', '2023-09-24 07:26:50', '2023-09-24 07:26:50'),
(424, 'AdqMxUOwYE', '5788976583', 'davon_melly@yahoo.com', 'UMLjYHOQkFDCbI', '2023-10-01 15:24:34', '2023-10-01 15:24:34'),
(428, 'Mike Michaelson', '86633525886', 'peterEndolbods@gmail.com', 'Hi there \r\n \r\nI have just verified your SEO on  globalconnex.com.au for its SEO Trend and saw that your website could use a boost. \r\n \r\nWe will improve your ranks organically and safely, using only state of the art AI and whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nMore info: \r\nhttps://www.digital-x-press.com/unbeatable-seo/ \r\n \r\n \r\nRegards \r\nMike Michaelson\r\nDigital X SEO Experts', '2023-10-04 05:29:14', '2023-10-04 05:29:14'),
(429, 'Jones Eloff', '85229168832', 'execs1@skiff.com', 'PRIVATE TRANSACTION \r\n \r\nShould you or your firm be able to handle this over invoice petroleum oil and gas strategic reserve fund. \r\n \r\nDue revert back to me for credentials of the fund with specific and detailed information to: mr.joneseloff@gmail.com \r\n \r\nJones Eloff', '2023-10-11 12:32:01', '2023-10-11 12:32:01'),
(433, 'Tobiasrab', '86581386747', 'no.reply.MikaelMeyer@gmail.com', 'Hey! globalconnex.com.au \r\n \r\nDid you know that it is possible to send business proposal completely legit? We provide a new method of sending commercial offers through feedback forms. You may locate these kinds of feedback forms on a lot of sites. \r\nWhen such business offers are sent, no personal data is employed, and messages are dispatched to forms specifically created to securely and safely receive messages and appeals. Contact Form messages aren’t usually sent to spam, as they are seen as important. \r\nWe give you a chance to experience our service for free. \r\nWe are able to transmit up to 50,000 messages for you. \r\n \r\nThe cost of sending one million messages is $59. \r\n \r\nThis message was automatically generated. \r\nPlease use the contact details below to get in touch with us. \r\n \r\nContact us. \r\nTelegram - https://t.me/FeedbackFormEU \r\nSkype  live:feedbackform2019 \r\nWhatsApp  +375259112693 \r\nWhatsApp  https://wa.me/+375259112693 \r\n \r\nWe only use chat for communication.', '2023-10-19 11:09:24', '2023-10-19 11:09:24'),
(435, 'Simpson Middleton', '84269356497', 'cfo@trustsecurityco.com', 'Greetings, \r\n \r\nTrust this message finds you in favorable condition. \r\n \r\nCould we have the pleasure of your time for a significant discussion concerning your business investment and potential partnership? Kindly reach out to us via email simpson@trustsecurityco.com for further details. \r\n \r\nRegards, \r\nMr. Simpson Middleton \r\nsimpson@trustsecurityco.com', '2023-10-24 02:04:03', '2023-10-24 02:04:03');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrationforms`
--

CREATE TABLE `migrationforms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `migration_name` varchar(40) NOT NULL,
  `migration_phone` varchar(16) NOT NULL,
  `migration_email` varchar(40) NOT NULL,
  `migration_from_country` varchar(40) NOT NULL,
  `migration_migrate_country` varchar(40) NOT NULL,
  `migration_visa` varchar(40) NOT NULL,
  `other_visa` varchar(40) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrationforms`
--

INSERT INTO `migrationforms` (`id`, `migration_name`, `migration_phone`, `migration_email`, `migration_from_country`, `migration_migrate_country`, `migration_visa`, `other_visa`, `created_at`, `updated_at`) VALUES
(1, 'Nahidul Islam', '01622960841', 'nahidulislamraju8@gmail.com', 'disabled selected hidden', 'disabled selected hidden', 'Work visa', 'Bangladesh', '2022-03-10 09:40:42', '2022-03-10 09:40:42');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(8, '2014_10_12_000000_create_users_table', 1),
(9, '2014_10_12_100000_create_password_resets_table', 1),
(10, '2019_08_19_000000_create_failed_jobs_table', 1),
(11, '2020_01_20_031708_create_contacts_table', 1),
(12, '2020_01_21_062103_create_misevens_table', 1),
(13, '2020_01_23_044715_create_admissionforms_table', 1),
(14, '2020_01_23_074131_create_migrationforms_table', 1),
(15, '2020_05_16_141202_create_permission_tables', 2);

-- --------------------------------------------------------

--
-- Table structure for table `misevens`
--

CREATE TABLE `misevens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` char(40) NOT NULL,
  `email` char(40) NOT NULL,
  `phone_number` char(16) NOT NULL,
  `age` tinyint(4) NOT NULL,
  `marital_status` tinyint(4) NOT NULL,
  `facebook` char(40) DEFAULT NULL,
  `nationality` char(40) NOT NULL,
  `experience_year` tinyint(4) NOT NULL,
  `university` char(40) NOT NULL,
  `certificate` char(40) NOT NULL,
  `specialized` char(40) DEFAULT NULL,
  `passing_year` smallint(6) NOT NULL,
  `company_one` char(40) NOT NULL,
  `position_one` char(40) NOT NULL,
  `experience_one` tinyint(4) NOT NULL,
  `company_two` char(40) DEFAULT NULL,
  `position_two` char(40) DEFAULT NULL,
  `experience_two` tinyint(4) DEFAULT NULL,
  `company_three` char(40) DEFAULT NULL,
  `position_three` char(40) DEFAULT NULL,
  `experience_three` tinyint(4) DEFAULT NULL,
  `ielts` tinyint(1) DEFAULT 0,
  `pte` tinyint(1) DEFAULT 0,
  `ielts_reading` tinyint(4) DEFAULT NULL,
  `ielts_speaking` tinyint(4) DEFAULT NULL,
  `ielts_writing` tinyint(4) DEFAULT NULL,
  `ielts_listening` tinyint(4) DEFAULT NULL,
  `ielts_overall_score` tinyint(4) DEFAULT NULL,
  `pte_reading` tinyint(4) DEFAULT NULL,
  `pte_speaking` tinyint(4) DEFAULT NULL,
  `pte_writing` tinyint(4) DEFAULT NULL,
  `pte_listening` tinyint(4) DEFAULT NULL,
  `pte_overall_score` tinyint(4) DEFAULT NULL,
  `mi_day` char(255) DEFAULT NULL,
  `mi_time` char(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `misevens`
--

INSERT INTO `misevens` (`id`, `name`, `email`, `phone_number`, `age`, `marital_status`, `facebook`, `nationality`, `experience_year`, `university`, `certificate`, `specialized`, `passing_year`, `company_one`, `position_one`, `experience_one`, `company_two`, `position_two`, `experience_two`, `company_three`, `position_three`, `experience_three`, `ielts`, `pte`, `ielts_reading`, `ielts_speaking`, `ielts_writing`, `ielts_listening`, `ielts_overall_score`, `pte_reading`, `pte_speaking`, `pte_writing`, `pte_listening`, `pte_overall_score`, `mi_day`, `mi_time`, `created_at`, `updated_at`) VALUES
(1, 'teasdf', 'test2@test.com', '1231231234', 44, 1, NULL, 'Singapore', 1, 'asdfasd', 'test2@test.com', NULL, 1990, 'ABC', 'sdfsdfsdf', 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, 36, 36, 42, 30, 36, 'Sunday', '6am to 8am', '2020-03-06 20:58:18', '2020-03-06 20:58:18'),
(2, 'Sharif', 'sharif@freshexport.com.au', '01673834882', 28, 1, 'Sharifjoy', 'Singapore', 20, 'BUBT', 'MBA', 'HRM', 2017, 'Mates global', 'Administrators', 2, 'SST logistic', 'Sales and operation officer', 1, 'Expo freight ltd', 'Warehouse officer', 1, 1, NULL, 60, 60, 60, 60, 60, NULL, NULL, NULL, NULL, NULL, 'Sunday', '4pm to 6pm', '2020-03-07 03:53:52', '2020-03-07 03:53:52'),
(3, 'Kamrul Hossain', 'mohammadkamrulhossain54@gmail.com', '84136069', 32, 1, NULL, 'Singapore', 9, 'SSTC Institute', 'Advance diploma in civil engineering', 'Timber formwork/scaffolding', 2011, 'ST LIM CONSTRUCTION 1997 PTE LTD', 'Timber formwork general worker', 2, 'JLU GLOBAL CAREER PTE LTD', 'Carpenter formwork general worker', 3, 'ROBI KISO PTE LTD', 'JLU CONSTRUCTION PTE LTD', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sunday', '11am to 1pm', '2020-03-07 08:59:33', '2020-03-07 08:59:33'),
(4, 'RAHMAN MD HAFIZUR', 'kamrulk76@gmail.com', '84559585', 32, 1, 'Kamrulk76', 'Singapore', 12, 'Government mojib college', 'Higher secondary certificate', 'Business study', 2007, 'STRAITS INNOVATION PTE LTD', 'Electrical supervisor', 8, 'Nil', 'Nil', NULL, NULL, 'Nil', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Saturday', '6pm to 8pm', '2020-03-07 09:31:13', '2020-03-07 09:31:13'),
(5, 'Farhad Mohammad', 'sm.farhad@hotmail.com', '87998964', 45, 1, NULL, 'Singapore', 20, 'Advanced diploma', 'Hospitality and tourism management', 'Marine propeller technician', 2011, 'Recon Propeller and engineering pte ltd', 'Project coordinator', 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '11am to 1pm', '2020-03-07 10:30:47', '2020-03-07 10:30:47'),
(6, 'Sunny', 'ssunnysaha04@gmail.com', '94523714', 31, 1, '94523714', 'Singapore', 10, 'Kaliakior college', 'Higher secondary school certificate', 'Commerce', 2006, 'Tiong Seng Contractors Pte Ltd', 'Safety coordinator', 3, 'Woh Hup private limited', 'Safety coordinator', 4, 'Na', 'Na', NULL, 1, NULL, 60, 60, 45, 55, 50, 65, 42, 36, 42, 42, 'Sunday', '11am to 1pm', '2020-03-08 03:15:03', '2020-03-08 03:15:03'),
(7, 'MIAH MOHAMMED SOHAG', 'tanginaakterbonna@gmail.com', '87717118', 28, 1, NULL, 'Singapore', 6, 'comilla city college', 'HSC', NULL, 2012, 'A&M ENGENEERING PVT LTD', 'pipe fitter', 3, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sunday', '10am to 12am', '2020-03-08 16:39:19', '2020-03-08 16:39:19'),
(8, 'Hossain Kamrul', 'mohammadkamrulhossain54@gmail.com', '84136069', 32, 1, NULL, 'Singapore', 8, 'SSTC INSTITUTE', 'Advance diploma in civil engineering', 'Timber formwork', 2014, 'S.T LIM CONSTRUCTION 1997 PTE LTD', 'Timber formwork worker', 2, NULL, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sunday', '6am to 8am', '2020-05-16 14:36:03', '2020-05-16 14:36:03'),
(9, 'test', 'test2@test.com', '1231231234', 33, 1, NULL, 'Singapore', 1, 'asdfasd', 'test2@test.com', NULL, 1993, 'ABC', 'sdfsdfsdf', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-05-16 18:34:00', '2020-05-16 18:34:00'),
(10, 'test', 'test2@test.com', '1231231234', 33, 1, NULL, 'Singapore', 1, 'asdfasd', 'test2@test.com', NULL, 1993, 'ABC', 'sdfsdfsdf', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-05-16 18:45:28', '2020-05-16 18:45:28'),
(11, 'test', 'test2@test.com', '1231231234', 33, 1, NULL, 'Singapore', 1, 'asdfasd', 'test2@test.com', NULL, 1993, 'ABC', 'sdfsdfsdf', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-05-16 18:47:42', '2020-05-16 18:47:42'),
(12, 'Hossain iqbal', 'Iqbalbd1991@icloud.com', '89295765', 32, 1, NULL, 'Singapore', 7, 'Chotna model high school', 'Ssc', NULL, 2010, 'Superiortec PTE LTD', 'Forman', 7, 'Superiortec PTE LTD', 'Forman', 7, NULL, 'Forman', 7, 1, NULL, 45, 50, 55, 50, 45, 42, 50, 42, 36, NULL, 'Sunday', '7am to 9am', '2020-06-13 04:46:46', '2020-06-13 04:46:46');

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'list students', 'web', '2020-05-16 18:29:55', '2020-05-16 18:29:55'),
(2, 'create students', 'web', '2020-05-16 18:29:55', '2020-05-16 18:29:55'),
(3, 'show students', 'web', '2020-05-16 18:29:55', '2020-05-16 18:29:55'),
(4, 'edit students', 'web', '2020-05-16 18:29:55', '2020-05-16 18:29:55'),
(5, 'delete students', 'web', '2020-05-16 18:29:55', '2020-05-16 18:29:55');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2020-05-16 18:29:55', '2020-05-16 18:29:55'),
(2, 'student', 'web', '2020-05-16 18:29:55', '2020-05-16 18:29:55'),
(3, 'super-admin', 'web', '2020-05-16 18:29:55', '2020-05-16 18:29:55');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(3, 2),
(4, 1),
(4, 2),
(5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admissionforms`
--
ALTER TABLE `admissionforms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admissionforms_admission_email_unique` (`admission_email`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contacts_contact_email_unique` (`contact_email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrationforms`
--
ALTER TABLE `migrationforms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `migrationforms_migration_email_unique` (`migration_email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `misevens`
--
ALTER TABLE `misevens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admissionforms`
--
ALTER TABLE `admissionforms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=441;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrationforms`
--
ALTER TABLE `migrationforms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `misevens`
--
ALTER TABLE `misevens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
