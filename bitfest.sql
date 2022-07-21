-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2022 at 07:04 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bitfest`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `topic_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `published` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `topic_id`, `title`, `image`, `body`, `published`, `created_at`) VALUES
(7, 4, 2, 'LFR', '1658234545_seminar.png', '&lt;p&gt;&lt;i&gt;Great news folks.&lt;/i&gt;&lt;/p&gt;&lt;p&gt;&lt;i&gt;In this gala time, we give you one of KUET\'s best Abidur Rahman Mallik.&lt;/i&gt;&lt;/p&gt;&lt;p&gt;&lt;i&gt;-&amp;gt; Co-founder and CTO, MazeGeek, Inc.&lt;/i&gt;&lt;/p&gt;&lt;p&gt;&lt;i&gt;-&amp;gt; Co-founder and CTO, Romoni Services Ltd.&lt;/i&gt;&lt;/p&gt;&lt;p&gt;&lt;i&gt;-&amp;gt; Ex-Samsung&lt;/i&gt;&lt;/p&gt;&lt;p&gt;&lt;i&gt;He is going to take a workshop on Entrepreneurship and Leadership which is very important as an fresh engineer in the job market. All of of you are cordially invited.&lt;/i&gt;&lt;/p&gt;&lt;p&gt;&lt;i&gt;His company MazeGeek Inc. has sponsored for the event &lt;/i&gt;&lt;a href=&quot;https://www.facebook.com/hashtag/line_follower_robot?__eep__=6&amp;amp;__cft__[0]=AZWBnFChYvhDXQfAAONUi7ZxeMB36mI8mNUqkQ9iAhS64l-9KDVJ5nwkMMSNghzdzUWgmn8zUvCoNrND1ji4bQhhdr91FYzJvFHLxzMS9hi2gcLdWCY_LNSZXxtUqvTpP8tXjdBTy3poXH-Z40OhXY3CV_XuD81Jb6XZhxstnkGmrRlH3I-C2_rWDzWY9ICA7UQ&amp;amp;__tn__=*NK-R&quot;&gt;&lt;i&gt;#line_follower_robot&lt;/i&gt;&lt;/a&gt;&lt;/p&gt;', 1, '2022-07-19 18:13:06'),
(8, 4, 3, 'Registration-fee', '1658234406_69225392_2933665673326726_4996668766373806080_n.jpg', '&lt;p&gt;&lt;i&gt;***Registration Fee Decreased***&lt;/i&gt;&lt;/p&gt;&lt;p&gt;&lt;i&gt;The registration fee for the gaming event: Counter Strike: Global Offensive has been decreased due to participants\' demand.&lt;/i&gt;&lt;/p&gt;&lt;p&gt;&lt;i&gt;Registration Fee: 2000 BDT &amp;amp; Last date of registration: 27th August&lt;/i&gt;&lt;/p&gt;&lt;p&gt;&lt;i&gt;Last date of payment: 31st August&lt;/i&gt;&lt;/p&gt;&lt;p&gt;&lt;i&gt;Rulebook: &lt;/i&gt;&lt;a href=&quot;https://l.facebook.com/l.php?u=https%3A%2F%2Ftinyurl.com%2Fy6lax6m4%3Ffbclid%3DIwAR0EmDuim0dYZhZth_cDWmFpXbWoD09XSntuE8chnJqC_WGQskhOm8UUjNI&amp;amp;h=AT2Z6VRsc-uyMwuzPOsSEguMaaNJspYJ7VhsRCdnjtVrbMVFgDm5O87C7k8XYw7gZv0li3WMIqIKs7VbQ880APj3jBkggC4nGdu1hF25k2sEZ_H63rxL7RKsNDTVJgNbDI-8&amp;amp;__tn__=-UK-R&amp;amp;c[0]=AT1OThJl5u1w5zNGlQ-FrA5Lz8H9frznHPthHCkW7t-at1-_1GXSy9Bq0o6sw-nk-gNVWpwYH1kjgw5ZDRncd-SEV-ggLdMl2xVgfUOyv64fgVecSR3-NeBLbjJu1rtnnH97xUBCYxfxctdjQlZmD56rMfTlPs9HpIF-u57BWkMst5KGVoSdna3Issj5q_WoQfk2-Q4FkQ&quot;&gt;&lt;i&gt;tinyurl.com/y6lax6m4&lt;/i&gt;&lt;/a&gt;&lt;/p&gt;&lt;p&gt;&lt;i&gt;Registration Link: &lt;/i&gt;&lt;a href=&quot;https://l.facebook.com/l.php?u=https%3A%2F%2Ftinyurl.com%2Fyyl8s83w%3Ffbclid%3DIwAR2zdjfoitibPcUWHdcTKOl42F870GTZtd3RGklFTeqlbeKaI2BEWmN-lWk&amp;amp;h=AT0SDDuJpxIk02iNgG6K4cSC49Yx3E3lCG4UyIf8IG8q7VSJmyYeZFE0xnIaKr2Z5FqXSyyUi3blSuiyw5pYXKSuYOP-cmhryYE93AgcX9TsxgC5SXkWFyIYbxjR3gUc4gt_&amp;amp;__tn__=-UK-R&amp;amp;c[0]=AT1OThJl5u1w5zNGlQ-FrA5Lz8H9frznHPthHCkW7t-at1-_1GXSy9Bq0o6sw-nk-gNVWpwYH1kjgw5ZDRncd-SEV-ggLdMl2xVgfUOyv64fgVecSR3-NeBLbjJu1rtnnH97xUBCYxfxctdjQlZmD56rMfTlPs9HpIF-u57BWkMst5KGVoSdna3Issj5q_WoQfk2-Q4FkQ&quot;&gt;&lt;i&gt;tinyurl.com/yyl8s83w&lt;/i&gt;&lt;/a&gt;&lt;/p&gt;&lt;p&gt;Visit our website &lt;a href=&quot;https://l.facebook.com/l.php?u=http%3A%2F%2Fkuet.ac.bd%2Fcse%2Fbitfest%3Ffbclid%3DIwAR2WEh32DwMHSNhS6Z64YhnYbp3U2ENmAscd7JmP3OKdCxhuyIcvdpjcT_w&amp;amp;h=AT0H6cmfXZCJcnmPL6e2C7tl-cIpsjYeO0pkgoZtvGz2B-Jn46JI9G7ycuk_enTO6yy7tJe2Q3PA_TW8ca4CmD6uM_rSLF6b5V_3LxTCDuzio5HD2N4xnhAcckyGaCH9OiIb&amp;amp;__tn__=-UK-R&amp;amp;c[0]=AT1OThJl5u1w5zNGlQ-FrA5Lz8H9frznHPthHCkW7t-at1-_1GXSy9Bq0o6sw-nk-gNVWpwYH1kjgw5ZDRncd-SEV-ggLdMl2xVgfUOyv64fgVecSR3-NeBLbjJu1rtnnH97xUBCYxfxctdjQlZmD56rMfTlPs9HpIF-u57BWkMst5KGVoSdna3Issj5q_WoQfk2-Q4FkQ&quot;&gt;kuet.ac.bd/cse/bitfest &lt;/a&gt;for more details.&lt;/p&gt;', 1, '2022-07-19 18:16:28'),
(9, 4, 6, 'IUPC update timing', '1658234618_icpc.jpg', '&lt;p&gt;&lt;i&gt;Here is the schedule of &quot;Brain Craft Ltd. - Bitfest KUET IUPC, 2019&quot;.&lt;/i&gt;&lt;/p&gt;&lt;p&gt;&lt;i&gt;** All participants please follow the schedule strictly.&lt;/i&gt;&lt;/p&gt;&lt;p&gt;&lt;i&gt;Reporting: 8:30 am&lt;/i&gt;&lt;/p&gt;&lt;p&gt;&lt;i&gt;Contest Starts: 9:00 am&lt;/i&gt;&lt;/p&gt;&lt;p&gt;&lt;i&gt;Contest Ends: 2:00 pm&lt;/i&gt;&lt;/p&gt;', 1, '2022-07-19 18:43:38'),
(10, 4, 7, 'Poster-presentation', '1658234770_68649224_2965347553491871_4038007992614912_n.png', '&lt;p&gt;&lt;strong&gt;Glory time continues for the successors. This is the result of &lt;/strong&gt;&lt;a href=&quot;https://www.facebook.com/hashtag/poster_presentation?__eep__=6&amp;amp;__cft__[0]=AZX8AqKHB82a06XpmYJBT8tXpI0FxiYJ7MTV3hHM7y2aB_U-1iV2ChAKbDmsFi3uyRkYcyofj1FHuKGeFLAVE8ukiGF0aXuEEP0N9A74I3Ie0J_5Lzn1V9Yx5MPeNl9vS_kdhF1c-NXXBsoFSlLmBkZLtOBO8pahmURasmqpo7IwPbPaRar-Ba03_zYOESy4RWo&amp;amp;__tn__=*NK-R&quot;&gt;&lt;strong&gt;#poster_presentation&lt;/strong&gt;&lt;/a&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Once again congrats to all of them&lt;/strong&gt;.&lt;/p&gt;', 1, '2022-07-19 18:46:10'),
(11, 4, 7, 'Project-Showcasing', '1658234842_69959586_2965155653511061_9100672702473043968_n.png', '&lt;p&gt;Hi, everyone. For everyone\'s convenience we are going to publish the results of today\'s segments.&lt;/p&gt;&lt;p&gt;First up the result of &lt;a href=&quot;https://www.facebook.com/hashtag/project_showcasing?__eep__=6&amp;amp;__cft__[0]=AZU8mBwei0wtuPsRVuWTN_hzJCcHrya9vBZWWuJ8NoJhUTs0vol0Ud9tupsDsm8DAMZf58Z9QAcdYazW4XP3UeeocKU5oll6laL5q8cquT8aip64qK0Tx5amCZFojKmvafrGrZipUcaY2pb9JzcKJ3F7fTR0-V1KSvO1CKWpFlzeE-gF2slIsPjYx5iQ49dBmEE&amp;amp;__tn__=*NK-R&quot;&gt;#project_showcasing&lt;/a&gt;&lt;/p&gt;&lt;p&gt;Congratulations to the team who have made to the top three and we thank every other team for being with us.&lt;/p&gt;', 1, '2022-07-19 18:47:22'),
(12, 4, 1, 'Sponsor !!!', '1658234955_69303819_2959347214091905_9007230758326108160_n.png', '&quot; id=&quot;body&quot;&gt;&lt;p&gt;This is team BitFest speaking to all of you as we welcome on board &quot;weDevs&quot;, our co-sponsor with whom we are looking forward have a great partnership. From now on, the mega event is named as &quot;Brain Craft Ltd. presents BitFest 2019 powered by weDevs&quot;.&lt;/p&gt;', 1, '2022-07-19 18:49:15'),
(13, 4, 3, 'payment!!!', '1658235078_69464423_2957156304310996_3889766307335241728_n.png', '&lt;p&gt;This is team BitFest speaking to all of you as we welcome on board &quot;weDevs&quot;, our co-sponsor with whom we are looking forward have a great partnership. From now on, the mega event is named as &quot;Brain Craft Ltd. presents BitFest 2019 powered by weDevs&quot;.&lt;/p&gt;', 1, '2022-07-19 18:51:18'),
(14, 5, 7, 'awe', '1658297305_hashem.jpg', '&lt;p&gt;dgm ksdmg dskg dg&amp;nbsp;&lt;/p&gt;', 1, '2022-07-20 12:08:25');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `name`, `description`) VALUES
(1, 'Sponsorship', '<p>Bitfest 2022 is scheduled to be held on September 28th. And the good news is- weDevs is participating in this magnificent event as a Platinum Sponsor. Not only that, our Founder &amp; CTO Tareq Hasan; Co-Founder &amp; CEO Nizam Uddin will be attending as the speakers and panelists.</p><p>They will share their thoughts-experiences about WordPress Ecosystem and its future prospects, Product Development, Digital Marketing, and more.</p><p>Many of our emerging talents and qualified team-members will play a key role in the event as speakers, organizers and also volunteers. And as a participant, you will find exciting giveaways including t-shirts, backpacks, stickers, pen, keyring, up to 100% special discounts and what\'s not!</p><p>Brain Craft Limited is a software development company currently specialising in Mobile applications development in the iOS App Store and the Google Play Store, the two primary areas are currently under active development with more than 20 free downloadable and subscription-based mobile applications. The company has enviable number of top charted apps in the iOS App Store<br>We offer the flexibility of fulfilling any of your resource requirements. It could range from the need for just a single developer to an entire team composed of specialists from various technical disciplines. We will rigorously adhere to your selection criteria to ensure that we have hired the right people as per your requirements. Although your team will be working from our offshore facility,<br>you will be manager of this team and assign them responsibilities as you would to your current employees.&nbsp;<br>&nbsp;</p>'),
(2, 'Speakers update', '<p>In this gala time, we give you one of KUET\'s best Abidur Rahman Mallik.</p><p>-&gt; Co-founder and CTO, MazeGeek, Inc.</p><p>-&gt; Co-founder and CTO, Romoni Services Ltd.</p><p>-&gt; Ex-Samsung</p>'),
(3, 'Registration ', '<p>dlkdw ,wd ,dq</p>'),
(4, 'software project update', '<h2>Software Project</h2><p>A Software Project is the complete procedure of software development from requirement gathering to testing and maintenance, carried out according to the execution methodologies, in a specified period of time to achieve intended software product.</p><h2>Need of software project management</h2><p>Software is said to be an intangible product. Software development is a kind of all new stream in world business and there’s very little experience in building software products. Most software products are tailor made to fit client’s requirements. The most important is that the underlying technology changes and advances so frequently and rapidly that experience of one product may not be applied to the other one. All such business and environmental constraints bring risk in software development hence it is essential to manage software projects efficiently.</p><p><img src=\"https://www.tutorialspoint.com/software_engineering/images/time_cost_quality.png\" alt=\"Time_Cost_Quality\"></p>'),
(5, 'hardware project update', '<blockquote><p><strong>Project Hardware</strong> means all materials, supplies, apparatus, devices, equipment, machinery, tools, parts, components, instruments, and appliances that are to be incorporated into the Project, whether provided by Seller or any Subcontractor.</p></blockquote>'),
(6, 'contest-programming update', '<blockquote><p><strong>Competitive programming</strong> is a <a href=\"https://en.wikipedia.org/wiki/Mind_sport\">mind sport</a> usually held over the <a href=\"https://en.wikipedia.org/wiki/Internet\">Internet</a> or a <a href=\"https://en.wikipedia.org/wiki/Local_network\">local network</a>, involving participants trying to <a href=\"https://en.wikipedia.org/wiki/Computer_programming\">program</a> according to provided specifications. Contestants are referred to as <i>sport programmers</i>. Competitive programming is recognized and supported by several multinational software and Internet companies, such as <a href=\"https://en.wikipedia.org/wiki/Google\">Google</a> &nbsp;and <a href=\"https://en.wikipedia.org/wiki/Facebook\">Facebook</a>.</p></blockquote><p>A programming competition generally involves the host presenting a set of <a href=\"https://en.wikipedia.org/wiki/Logic\">logical</a> or <a href=\"https://en.wikipedia.org/wiki/Mathematical_problem\">mathematical problems</a>, also known as <a href=\"https://en.wikipedia.org/wiki/Puzzle\">puzzles</a>, to the contestants (who can vary in number from tens to several thousands), and contestants are required to write <a href=\"https://en.wikipedia.org/wiki/Computer_program\">computer programs</a> capable of solving each problem. Judging is based mostly upon number of problems solved and time spent for writing successful solutions, but may also include other factors (quality of output produced, execution time, memory usage, program size, etc.)</p>'),
(7, 'result', '<p>result of every segements including IUPC, POSTER PRESENTATION , SOFTWARE PROJEXT SHOWCASING, HARDWARE PROJECT SHOWCASING ETC.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `admin` int(2) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `admin`, `username`, `email`, `password`, `created_at`) VALUES
(4, 0, 'afroz', 'afroz1807043@stud.kuet.ac.bd', '$2y$10$1NJJfXve5ixr9.kaaMFncOJl8L/aTcki/ql.iHI2C.qCfKPOSIPnS', '2022-07-19 13:06:17'),
(5, 1, 'Israt', 'isratafroz55@gmail.com', '$2y$10$SzEfdtjLFsnuJXgUQ3c1EO1tuFPFpyHmuURVdgxKQwhYPPcyPamxy', '2022-07-19 13:06:12'),
(6, 0, 'Isha', 'sweetdreamdream241@gmail.com', '$2y$10$51B4xx4GCDPVYt5Mp.UdyOGKXHsUCC00SIG1wE2TB72Y4cjncHQHa', '2022-07-19 13:06:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
