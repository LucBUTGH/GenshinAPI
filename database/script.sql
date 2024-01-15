-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 14 jan. 2024 à 17:52
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `apigenshin`
--

-- --------------------------------------------------------

--
-- Structure de la table `gen_artifacts`
--

CREATE TABLE `gen_artifacts` (
  `art_id` int(11) NOT NULL,
  `art_name_set` text NOT NULL,
  `art_desc_2p` text NOT NULL,
  `art_desc_4p` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `gen_artifacts`
--

INSERT INTO `gen_artifacts` (`art_id`, `art_name_set`, `art_desc_2p`, `art_desc_4p`) VALUES
(1, 'Initiate', '', ''),
(2, 'Adventurer', 'Max HP increased by 1,000.', 'Opening a chest regenerates 30% Max HP over 5s.'),
(3, 'Lucky Dog', 'DEF increased by 100.', 'Picking up Mora restores 300 HP.'),
(4, 'Traveling Doctor', 'Increases incoming healing by 20%.', 'Using Elemental Burst restores 20% HP.'),
(5, 'Resolution of Sojourner', 'ATK +18%.', 'Increases Charged Attack CRIT Rate by 30%.'),
(6, 'Tiny Miracle', 'All Elemental RES increased by 20%.', 'Incoming Elemental DMG increases corresponding Elemental RES by 30% for 10s. Can only occur once every 10s. '),
(7, 'Berserker', 'CRIT Rate +12%', 'When HP is below 70%, CRIT Rate increases by an additional 24%. '),
(8, 'Instructor', 'Increases Elemental Mastery by 80.', 'Upon triggering an Elemental Reaction, increases all party members\' Elemental Mastery by 120 for 8s.'),
(9, 'The Exile', 'Energy Recharge +20%', 'Using an Elemental Burst regenerates 2 Energy for all party members (excluding the wearer) every 2s for 6s. This effect cannot stack.'),
(10, 'Defender\'s Will', 'DEF +30%', 'For each different element present in your own party, the wearer\'s Elemental RES to that corresponding element is increased by 30%.'),
(11, 'Brave Heart', 'ATK +18%.', 'Increases DMG by 30% against opponents with more than 50% HP.'),
(12, 'Martial Artist', 'Normal and Charged Attack DMG +15%', 'After using Elemental Skill, increases Normal Attack and Charged Attack DMG by 25% for 8s. '),
(13, 'Gambler', 'Increases Elemental Skill DMG by 20%.', 'Defeating an opponent has 100% chance to remove Elemental Skill CD. Can only occur once every 15s.'),
(14, 'Scholar', 'Energy Recharge +20%', 'Gaining Elemental Particles or Orbs gives 3 Energy to all party members who have a bow or a catalyst equipped. Can only occur once every 3s.'),
(15, 'Gladiator\'s Finale', 'ATK +18%.', 'If the wielder of this artifact set uses a Sword, Claymore or Polearm, increases their Normal Attack DMG by 35%.'),
(16, 'Wanderer\'s Troupe', 'Increases Elemental Mastery by 80.', 'Increases Charged Attack DMG by 35% if the character uses a Catalyst or Bow.'),
(17, 'Noblesse Oblige', 'Elemental Burst DMG +20%', 'Using an Elemental Burst increases all party members\' ATK by 20% for 12s. This effect cannot stack.'),
(18, 'Bloodstained Chivalry', 'Physical DMG Bonus +25%', 'After defeating an opponent, increases Charged Attack DMG by 50%, and reduces its Stamina cost to 0 for 10s. Also triggers with wild animals such as boars, squirrels and frogs.'),
(19, 'Maiden Beloved', 'Character Healing Effectiveness +15%', 'Using an Elemental Skill or Burst increases healing received by all party members by 20% for 10s.'),
(20, 'Viridescent Venerer', 'Anemo DMG Bonus +15%', 'Increases Swirl DMG by 60%. Decreases opponent\'s Elemental RES to the element infused in the Swirl by 40% for 10s.'),
(21, 'Archaic Petra', 'Geo DMG Bonus +15%', 'Upon obtaining an Elemental Shard created through a Crystallize Reaction, all party members gain 35% DMG Bonus for that particular element for 10s. Only one form of Elemental DMG Bonus can be gained in this manner at any one time.'),
(22, 'Retracing Bolide', 'Increases Shield Strength by 35%.', 'While protected by a shield, gain an additional 40% Normal and Charged Attack DMG.'),
(23, 'Thundersoother', 'Electro RES increased by 40%.', 'Increases DMG against opponents affected by Electro by 35%.'),
(24, 'Thundering Fury', 'Electro DMG Bonus +15%', 'Increases DMG caused by Overloaded, Electro-Charged, Superconduct, and Hyperbloom by 40%, and the DMG Bonus conferred by Aggravate is increased by 20%. When Quicken or the aforementioned Elemental Reactions are triggered, Elemental Skill CD is decreased by 1s. Can only occur once every 0.8s.'),
(25, 'Lavawalker', 'Pyro RES increased by 40%.', 'Increases DMG against opponents affected by Pyro by 35%.'),
(26, 'Crimson Witch of Flames', 'Pyro DMG Bonus +15%', 'Increases Overloaded and Burning, and Burgeon DMG by 40%. Increases Vaporize and Melt DMG by 15%. Using Elemental Skill increases the 2-Piece Set Bonus by 50% of its starting value for 10s. Max 3 stacks'),
(27, 'Blizzard Strayer', 'Cryo DMG Bonus +15%', 'When a character attacks an opponent affected by Cryo, their CRIT Rate is increased by 20%. If the opponent is Frozen, CRIT Rate is increased by an additional 20%.'),
(28, 'Heart of Depth', 'Hydro DMG Bonus +15%', 'After using an Elemental Skill, increases Normal Attack and Charged Attack DMG by 30% for 15s.'),
(29, 'Tenacity of the Millelith', 'HP +20%', 'When an Elemental Skill hits an opponent, the ATK of all nearby party members is increased by 20% and their Shield Strength is increased by 30% for 3s. This effect can be triggered once every 0.5s. This effect can still be triggered even when the character who is using this artifact set is not on the field.'),
(30, 'Pale Flame', 'Physical DMG Bonus +25%', 'When an Elemental Skill hits an opponent, ATK is increased by 9% for 7s. This effect stacks up to 2 times and can be triggered once every 0.3s. Once 2 stacks are reached, the 2-set effect is increased by 100%.'),
(31, 'Shimenawa\'s Reminiscence', 'ATK +18%', 'When casting an Elemental Skill, if the character has 15 or more Energy, they lose 15 Energy and Normal/Charged/Plunging Attack DMG is increased by 50% for 10s. This effect will not trigger again during that duration.'),
(32, 'Emblem of Severed Fate', 'Energy Recharge +20%', 'Increases Elemental Burst DMG by 25% of Energy Recharge. A maximum of 75% bonus DMG can be obtained in this way.'),
(33, 'Husk of Opulent Dreams', 'DEF +30%', ' A character equipped with this Artifact set will obtain the Curiosity effect in the following conditions:\r\nWhen on the field, the character gains 1 stack after hitting an opponent with a Geo attack, triggering a maximum of once every 0.3s. When off the field, the character gains 1 stack every 3s. Curiosity can stack up to 4 times, each providing 6% DEF and a 6% Geo DMG Bonus. When 6 seconds pass without gaining a Curiosity stack, 1 stack is lost.'),
(34, 'Ocean-Hued Clam', 'Healing Bonus +15%.', 'When the character equipping this artifact set heals a character in the party, a Sea-Dyed Foam will appear for 3 seconds, accumulating the amount of HP recovered from healing (including overflow healing). At the end of the duration, the Sea-Dyed Foam will explode, dealing DMG to nearby opponents based on 90% of the accumulated healing. (This DMG is calculated similarly to Reactions such as Electro-Charged, and Superconduct, but it is not affected by Elemental Mastery, Character Levels, or Reaction DMG Bonuses). Only one Sea-Dyed Foam can be produced every 3.5 seconds. Each Sea-Dyed Foam can accumulate up to 30,000 HP (including overflow healing). There can be no more than one Sea-Dyed Foam active at any given time. This effect can still be triggered even when the character who is using this artifact set is not on the field.'),
(35, 'Vermillion Hereafter', 'ATK +18%', 'After using an Elemental Burst. this character will gain the Nascent Light effect, increasing their ATK by 8% for 16s. When the character\'s HP decreases, their ATK will further increase by 10%. This increase can occur this way maximum of 4 times. This effect can be triggered once every 0.8s. Nascent Light will be dispelled when the character leaves the field. If an Elemental Burst is used again during the duration of Nascent Light, the original Nascent Light will be dispelled.'),
(36, 'Echoes of an Offering', 'ATK +18%', 'When Normal Attacks hit opponents, there is a 36% chance that it will trigger Valley Rite, which will increase Normal Attack DMG by 70% of ATK. This effect will be dispelled 0.05s after a Normal Attack deals DMG.\r\nIf a Normal Attack fails to trigger Valley Rite, the odds of it triggering the next time will increase by 20%.\r\nThis trigger can occur once every 0.2s.'),
(37, 'Deepwood Memories', 'Dendro DMG Bonus +15%', 'After Elemental Skills or Bursts hit opponents, the targets\' Dendro RES will be decreased by 30% for 8s. This effect can be triggered even if the equipping character is not on the field.'),
(38, 'Gilded Dreams', 'Increases Elemental Mastery by 80.', 'Within 8s of triggering an Elemental Reaction, the character equipping this will obtain buffs based on the Elemental Type of the other party members. ATK is increased by 14% for each party member whose Elemental Type is the same as the equipping character, and Elemental Mastery is increased by 50 for every party member with a different Elemental Type. Each of the aforementioned buffs will count up to 3 characters. This effect can be triggered once every 8s. The character who equips this can still trigger its effects when not on the field.'),
(39, 'Desert Pavilion Chronicle', 'Anemo DMG Bonus +15%.', 'Charged Attacks hit opponents, the equipping character\'s Normal Attack SPD will increase by 10% while Normal, Charged, and Plunging Attack DMG will increase by 40% for 15s.'),
(40, 'Flower of Paradise Lost', 'Increases Elemental Mastery by 80.', 'The equipping character\'s Bloom, Hyperbloom, and Burgeon reaction DMG are increased by 40%. Additionally, after the equipping character triggers Bloom, Hyperbloom, or Burgeon, they will gain another 25% bonus to the effect mentioned prior. Each stack of this lasts 10s. Max 4 stacks simultaneously. This effect can only be triggered once per second. The character who equips this can still trigger its effects when not on the field.'),
(41, 'Nymph\'s Dream', 'Hydro DMG Bonus +15%', 'After Normal, Charged, and Plunging Attacks, Elemental Skills, and Elemental Bursts hit opponents, 1 stack of Mirrored Nymph will triggered, lasting 8s. When under the effect of 1, 2, or 3 or more Mirrored Nymph stacks, ATK will be increased by 7%/16%/25%, and Hydro DMG will be increased by 4%/9%/15%. Mirrored Nymph created by Normal, Charged, and Plunging Attacks, Elemental Skills, and Elemental Bursts exist independently.'),
(42, 'Vourukasha\'s Glow', 'HP +20%', 'Elemental Skill and Elemental Burst DMG will be increased by 10%. After the equipping character takes DMG, the aforementioned DMG Bonus is increased by 80% for 5s. This effect increase can have 5 stacks. The duration of each stack is counted independently. These effects can be triggered even when the equipping character is not on the field.'),
(43, 'Marechaussee Hunter', 'Normal and Charged Attack DMG +15%.', 'When current HP increases or decreases, CRIT Rate will be increased by 12% for 5s. Max 3 stacks.'),
(44, 'Golden Troupe', 'Increases Elemental Skill DMG by 20%', 'Increases Elemental Skill DMG by 25%. Additionally, when not on the field, Elemental Skill DMG will be further increased by 25%. This effect will be cleared 2s after taking the field.'),
(45, 'Song of Days Past', 'Healing Bonus +15%', 'When the equipping character heals a party member, the Yearning effect will be created for 6s, which records the total amount of healing provided (including overflow healing). When the duration expires, the Yearning effect will be transformed into the \"Waves of Days Past\" effect: When your active party member hits an opponent with a Normal Attack, Charged Attack, Plunging Attack, Elemental Skill, or Elemental Burst, the DMG dealt will be increased by 8% of the total healing amount recorded by the Yearning effect. The \"Waves of Days Past\" effect is removed after it has taken effect 5 times or after 10s. A single instance of the Yearning effect can record up to 15,000 healing, and only a single instance can exist at once, but it can record the healing from multiple equipping characters. Equipping characters on standby can still trigger this effect.'),
(46, 'Nighttime Whispers in the Echoing Woods', 'ATK +18%', 'After using an Elemental Skill, gain a 20% Geo DMG Bonus for 10s. While under a shield granted by the Crystallize reaction, the above effect will be increased by 150%, and this additional increase disappears 1s after that shield is lost.');

--
-- Déclencheurs `gen_artifacts`
--
DELIMITER $$
CREATE TRIGGER `TRIG_RARITY_ARTE` AFTER INSERT ON `gen_artifacts` FOR EACH ROW BEGIN
    IF NEW.art_id > 14 THEN
        -- Insertion avec 4_star
        INSERT INTO gen_art_rarities (art_id, art_rar_rarity)
        VALUES (NEW.art_id, '4_star');
        
        -- Insertion avec 5_star
        INSERT INTO gen_art_rarities (art_id, art_rar_rarity)
        VALUES (NEW.art_id, '5_star');
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `gen_art_rarities`
--

CREATE TABLE `gen_art_rarities` (
  `art_rar_id` int(11) NOT NULL,
  `art_id` int(11) NOT NULL,
  `art_rar_rarity` enum('1_star','2_star','3_star','4_star','5_star') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `gen_art_rarities`
--

INSERT INTO `gen_art_rarities` (`art_rar_id`, `art_id`, `art_rar_rarity`) VALUES
(1, 1, '1_star'),
(2, 2, '1_star'),
(3, 2, '2_star'),
(4, 2, '3_star'),
(11, 3, '1_star'),
(12, 3, '2_star'),
(13, 3, '3_star'),
(20, 4, '1_star'),
(21, 4, '2_star'),
(22, 4, '3_star'),
(23, 5, '3_star'),
(24, 5, '4_star'),
(25, 6, '3_star'),
(26, 6, '4_star'),
(27, 7, '3_star'),
(28, 7, '4_star'),
(29, 8, '3_star'),
(30, 8, '4_star'),
(31, 9, '3_star'),
(32, 9, '4_star'),
(33, 10, '3_star'),
(34, 10, '4_star'),
(35, 11, '3_star'),
(36, 11, '4_star'),
(37, 12, '3_star'),
(38, 12, '4_star'),
(39, 13, '3_star'),
(40, 13, '4_star'),
(41, 14, '3_star'),
(42, 14, '4_star'),
(43, 15, '4_star'),
(44, 15, '5_star'),
(45, 16, '4_star'),
(46, 16, '5_star'),
(47, 17, '4_star'),
(48, 17, '5_star'),
(49, 18, '4_star'),
(50, 18, '5_star'),
(51, 19, '4_star'),
(52, 19, '5_star'),
(53, 20, '4_star'),
(54, 20, '5_star'),
(55, 21, '4_star'),
(56, 21, '5_star'),
(57, 22, '4_star'),
(58, 22, '5_star'),
(59, 23, '4_star'),
(60, 23, '5_star'),
(61, 24, '4_star'),
(62, 24, '5_star'),
(63, 25, '4_star'),
(64, 25, '5_star'),
(65, 26, '4_star'),
(66, 26, '5_star'),
(67, 27, '4_star'),
(68, 27, '5_star'),
(69, 28, '4_star'),
(70, 28, '5_star'),
(71, 29, '4_star'),
(72, 29, '5_star'),
(73, 30, '4_star'),
(74, 30, '5_star'),
(75, 31, '4_star'),
(76, 31, '5_star'),
(77, 32, '4_star'),
(78, 32, '5_star'),
(79, 33, '4_star'),
(80, 33, '5_star'),
(81, 34, '4_star'),
(82, 34, '5_star'),
(83, 35, '4_star'),
(84, 35, '5_star'),
(85, 36, '4_star'),
(86, 36, '5_star'),
(87, 37, '4_star'),
(88, 37, '5_star'),
(89, 38, '4_star'),
(90, 38, '5_star'),
(91, 39, '4_star'),
(92, 39, '5_star'),
(93, 40, '4_star'),
(94, 40, '5_star'),
(95, 41, '4_star'),
(96, 41, '5_star'),
(97, 42, '4_star'),
(98, 42, '5_star'),
(99, 43, '4_star'),
(100, 43, '5_star'),
(101, 44, '4_star'),
(102, 44, '5_star'),
(103, 45, '4_star'),
(104, 45, '5_star'),
(105, 46, '4_star'),
(106, 46, '5_star');

-- --------------------------------------------------------

--
-- Structure de la table `gen_characters`
--

CREATE TABLE `gen_characters` (
  `cha_id` int(11) NOT NULL,
  `cha_name` varchar(255) NOT NULL,
  `cha_weapon_type` varchar(255) NOT NULL,
  `cha_rarity` enum('4_star','5_star') NOT NULL,
  `cha_element` varchar(255) NOT NULL,
  `cha_ascension_stat` varchar(255) NOT NULL,
  `cha_region` varchar(255) NOT NULL,
  `cha_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `gen_characters`
--

INSERT INTO `gen_characters` (`cha_id`, `cha_name`, `cha_weapon_type`, `cha_rarity`, `cha_element`, `cha_ascension_stat`, `cha_region`, `cha_image`) VALUES
(1, 'Aether', 'Sword', '', 'Anemo', 'ATK', 'None', './pics/Aether.png'),
(2, 'Lumine', 'Sword', '', 'Anemo', 'ATK', 'None', './pics/Lumine.png'),
(3, 'Amber', 'Bow', '4_star', 'Pyro', 'ATK', 'Mondstadt', './pics/Amber.png'),
(4, 'Kaeya', 'Sword', '4_star', 'Cryo', 'Element Mastery', 'Mondstadt', './pics/Kaeya.png'),
(5, 'Lisa', 'Catalyst', '4_star', 'Electro', 'Energy Recharge', 'Mondstadt', './pics/Lisa.png'),
(6, 'Barbara', 'Catalyst', '4_star', 'Hydro', 'HP', 'Mondstadt', './pics/Barbara.png'),
(7, 'Razor', 'Claymore', '4_star', 'Electro', 'Physical DMG Bonus', 'Mondstadt', './pics/Razor.png'),
(8, 'Xiangling', 'Polearm', '4_star', 'Pyro', 'Element Mastery', 'Liyue', './pics/Xiangling.png'),
(9, 'Beidou', 'Claymore', '4_star', 'Electro', 'Electro DMG Bonus', 'Liyue', './pics/Beidou.png'),
(10, 'Xingqiu', 'Sword', '4_star', 'Hydro', 'ATK', 'Liyue', './pics/Xingqiu.png'),
(11, 'Ningguang', 'Catalyst', '4_star', 'Geo', 'Geo DMG Bonus', 'Liyue', './pics/Ningguang.png'),
(12, 'Fischl', 'Bow', '4_star', 'Electro', 'ATK', 'Mondstadt', './pics/Fischl.png'),
(13, 'Bennett', 'Sword', '4_star', 'Pyro', 'Energy Recharge', 'Mondstadt', './pics/Bennett.png'),
(14, 'Noelle', 'Claymore', '4_star', 'Geo', 'DEF', 'Mondstadt', './pics/Noelle.png'),
(15, 'Albedo', 'Sword', '5_star', 'Geo', 'Geo DMG Bonus', 'Mondstadt', './pics/Albedo.png'),
(16, 'Chongyun', 'Claymore', '4_star', 'Cryo', 'ATK', 'Liyue', './pics/Chongyun.png'),
(17, 'Sucrose', 'Catalyst', '4_star', 'Anemo', 'Anemo DMG Bonus', 'Mondstadt', './pics/Sucrose.png'),
(18, 'Jean', 'Sword', '5_star', 'Anemo', 'Healing Bonus', 'Mondstadt', './pics/Jean.png'),
(19, 'Diluc', 'Claymore', '5_star', 'Pyro', 'CRIT Rate', 'Mondstadt', './pics/Diluc.png'),
(20, 'Qiqi', 'Sword', '5_star', 'Cryo', 'Healing Bonus', 'Liyue', './pics/Qiqi.png'),
(21, 'Mona', 'Catalyst', '5_star', 'Hydro', 'Energy Recharge', 'Mondstadt', './pics/Mona.png'),
(22, 'Keqing', 'Sword', '5_star', 'Electro', 'CRIT DMG', 'Liyue', './pics/Keqing.png'),
(23, 'Venti', 'Bow', '5_star', 'Anemo', 'Energy Recharge', 'Mondstadt', './pics/Venti.png'),
(24, 'Klee', 'Catalyst', '5_star', 'Pyro', 'Pyro DMG Bonus', 'Mondstadt', './pics/Klee.png'),
(25, 'Diona', 'Bow', '4_star', 'Cryo', 'Cryo DMG Bonus', 'Mondstadt', './pics/Diona.png'),
(26, 'Tartaglia', 'Bow', '5_star', 'Hydro', 'Hydro DMG Bonus', 'Liyue', './pics/Tartaglia.png'),
(27, 'Xinyan', 'Claymore', '4_star', 'Pyro', 'ATK', 'Liyue', './pics/Xinyan.png'),
(28, 'Zhongli', 'Polearm', '5_star', 'Geo', 'Geo DMG Bonus', 'Liyue', './pics/Zhongli.png'),
(29, 'Ganyu', 'Bow', '5_star', 'Cryo', 'CRIT DMG', 'Liyue', './pics/Ganyu.png'),
(30, 'Xiao', 'Polearm', '5_star', 'Anemo', 'CRIT Rate', 'Liyue', './pics/Xiao.png'),
(31, 'Hu Tao', 'Polearm', '5_star', 'Pyro', 'CRIT DMG', 'Liyue', './pics/Hu Tao.png'),
(32, 'Rosalia', 'Polearm', '4_star', 'Cryo', 'ATK', 'Mondstadt', './pics/Rosalia.png'),
(33, 'Yanfei', 'Catalyst', '4_star', 'Pyro', 'Pyro DMG Bonus', 'Liyue', './pics/Yanfei.png'),
(34, 'Eula', 'Claymore', '5_star', 'Cryo', 'Physical DMG Bonus', 'Mondstadt', './pics/Eula.png'),
(35, 'Kaedehara Kazuha', 'Sword', '5_star', 'Anemo', 'Element Mastery', 'Inazuma', './pics/Kaedehara Kazuha.png'),
(36, 'Kamisato Ayaka', 'Sword', '5_star', 'Cryo', 'CRIT DMG', 'Inazuma', './pics/Kamisato Ayaka.png'),
(37, 'Sayu', 'Claymore', '4_star', 'Anemo', 'Element Mastery', 'Inazuma', './pics/Sayu.png'),
(38, 'Yoimiya', 'Bow', '5_star', 'Pyro', 'CRIT Rate', 'Inazuma', './pics/Yoimiya.png'),
(39, 'Aloy', 'Bow', '', 'Cryo', 'Cryo DMG Bonus', 'None', './pics/Aloy.png'),
(40, 'Kujou Sara', 'Bow', '4_star', 'Electro', 'ATK', 'Inazuma', './pics/Kujou Sara.png'),
(41, 'Shogun Raiden', 'Polearm', '5_star', 'Electro', 'Energy Recharge', 'Inazuma', './pics/Shogun Raiden.png'),
(42, 'Sangonomiya Kokomi', 'Catalyst', '5_star', 'Hydro', 'Hydro DMG Bonus', 'Inazuma', './pics/Sangonomiya Kokomi.png'),
(43, 'Thoma', 'Polearm', '4_star', 'Pyro', 'ATK', 'Inazuma', './pics/Thoma.png'),
(44, 'Gorou', 'Bow', '4_star', 'Geo', 'Geo DMG Bonus', 'Inazuma', './pics/Gorou.png'),
(45, 'Arataki Itto', 'Claymore', '5_star', 'Geo', 'CRIT Rate', 'Inazuma', './pics/Arataki Itto.png'),
(46, 'Yun Jin', 'Polearm', '4_star', 'Geo', 'Energy Recharge', 'Liyue', './pics/Yun Jin.png'),
(47, 'Shenhe', 'Polearm', '5_star', 'Cryo', 'ATK', 'Liyue', './pics/Shenhe.png'),
(48, 'Yae Miko', 'Catalyst', '5_star', 'Electro', 'CRIT Rate', 'Inazuma', './pics/Yae Miko.png'),
(49, 'Kamisato Ayato', 'Sword', '5_star', 'Hydro', 'CRIT DMG', 'Inazuma', './pics/Kamisato Ayato.png'),
(50, 'Yelan', 'Bow', '5_star', 'Hydro', 'CRIT Rate', 'Liyue', './pics/Yelan.png'),
(51, 'Kuki Shinobu', 'Sword', '4_star', 'Electro', 'HP', 'Inazuma', './pics/Kuki Shinobu.png'),
(52, 'Shikanoin Heizou', 'Catalyst', '4_star', 'Anemo', 'Anemo DMG Bonus', 'Inazuma', './pics/Shikanoin Heizou.png'),
(53, 'Collei', 'Bow', '4_star', 'Dendro', 'ATK', 'Sumeru', './pics/Collei.png'),
(54, 'Tighnari', 'Bow', '5_star', 'Electro', 'Dendro DMG Bonus', 'Sumeru', './pics/Tighnari.png'),
(55, 'Dori', 'Claymore', '4_star', 'Electro', 'HP', 'Sumeru', './pics/Dori.png'),
(56, 'Candace', 'Polearm', '4_star', 'Hydro', 'HP', 'Sumeru', './pics/Candace.png'),
(57, 'Cyno', 'Polearm', '5_star', 'Electro', 'CRIT DMG', 'Sumeru', './pics/Cyno.png'),
(58, 'Nilou', 'Claymore', '5_star', 'Hydro', 'HP', 'Sumeru', './pics/Nilou.png'),
(59, 'Nahida', 'Catalyst', '5_star', 'Dendro', 'Element Mastery', 'Sumeru', './pics/Nahida.png'),
(60, 'Layla', 'Sword', '4_star', 'Cryo', 'HP', 'Sumeru', './pics/Layla.png'),
(61, 'Faruzan', 'Bow', '4_star', 'Anemo', 'ATK', 'Sumeru', './pics/Faruzan.png'),
(62, 'Wanderer', 'Catalyst', '5_star', 'Anemo', 'CRIT Rate', 'Sumeru', './pics/Wanderer.png'),
(63, 'Yaoyao', 'Polearm', '4_star', 'Dendro', 'HP', 'Liyue', './pics/Yaoyao.png'),
(64, 'Alhaitham', 'Sword', '5_star', 'Dendro', 'Dendro DMG Bonus', 'Sumeru', './pics/Alhaitham.png'),
(65, 'Dehya', 'Claymore', '5_star', 'Pyro', 'HP', 'Sumeru', './pics/Dehya.png'),
(66, 'Mika', 'Polearm', '4_star', 'Cryo', 'HP', 'Mondstadt', './pics/Mika.png'),
(67, 'Kaveh', 'Claymore', '4_star', 'Dendro', 'Element Mastery', 'Sumeru', './pics/Kaveh.png'),
(68, 'Baizhu', 'Catalyst', '5_star', 'Dendro', 'HP', 'Liyue', './pics/Baizhu.png'),
(69, 'Kirara', 'Sword', '4_star', 'Dendro', 'HP', 'Inazuma', './pics/Kirara.png'),
(70, 'Lynette', 'Sword', '4_star', 'Anemo', 'Anemo DMG Bonus', 'Fontaine', './pics/Lynette.png'),
(71, 'Lyney', 'Bow', '5_star', 'Pyro', 'CRIT Rate', 'Fontaine', './pics/Lyney.png'),
(72, 'Freminet', 'Claymore', '4_star', 'Cryo', 'ATK', 'Fontaine', './pics/Freminet.png'),
(73, 'Neuvillette', 'Catalyst', '5_star', 'Hydro', 'CRIT DMG', 'Fontaine', './pics/Neuvillette.png'),
(74, 'Wriosthesley', 'Catalyst', '5_star', 'Cryo', 'CRIT DMG', 'Fontaine', './pics/Wriosthesley.png'),
(75, 'Furina', 'Sword', '5_star', 'Hydro', 'CRIT Rate', 'Fontaine', './pics/Furina.png'),
(76, 'Navia', 'Claymore', '5_star', 'Geo', 'CRIT DMG', 'Fontaine', './pics/Navia.png'),
(77, 'Chevreuse', 'Polearm', '4_star', 'Pyro', 'HP', 'Fontaine', './pics/Chevreuse.png');

-- --------------------------------------------------------

--
-- Structure de la table `gen_weapons`
--

CREATE TABLE `gen_weapons` (
  `wea_id` int(11) NOT NULL,
  `wea_name` varchar(255) DEFAULT NULL,
  `wea_weapon_type` varchar(255) DEFAULT NULL,
  `wea_rarity` varchar(255) DEFAULT NULL,
  `wea_ascension` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `gen_weapons`
--

INSERT INTO `gen_weapons` (`wea_id`, `wea_name`, `wea_weapon_type`, `wea_rarity`, `wea_ascension`) VALUES
(1, '\"The Catch\"', 'Polearm', '4_star', 'Energy Recharge'),
(2, 'A Thousand Floating Dreams', 'Catalyst', '5_star', 'Elemental Mastery'),
(3, 'Akuoumaru', 'Claymore', '4_star', 'ATK'),
(4, 'Alley Hunter', 'Bow', '4_star', 'ATK'),
(5, 'Amenoma Kageuchi', 'Sword', '4_star', 'ATK'),
(6, 'Amos\' Bow', 'Bow', '5_star', 'ATK'),
(7, 'Apprentice\'s Notes', 'Catalyst', '1_star', ''),
(8, 'Aqua Simulacra', 'Bow', '5_star', 'CRIT DMG'),
(9, 'Aquila Favonia', 'Sword', '5_star', 'Physical DMG Bonus'),
(10, 'Ballad of the Fjords', 'Polearm', '4_star', 'CRIT Rate'),
(11, 'Beacon of the Reed Sea', 'Claymore', '5_star', 'CRIT Rate'),
(12, 'Beginner\'s Protector', 'Polearm', '1_star', ''),
(13, 'Black Tassel', 'Polearm', '3_star', 'HP'),
(14, 'Blackcliff Agate', 'Catalyst', '4_star', 'CRIT DMG'),
(15, 'Blackcliff Longsword', 'Sword', '4_star', 'CRIT DMG'),
(16, 'Blackcliff Pole', 'Polearm', '4_star', 'CRIT DMG'),
(17, 'Blackcliff Slasher', 'Claymore', '4_star', 'CRIT DMG'),
(18, 'Blackcliff Warbow', 'Bow', '4_star', 'CRIT DMG'),
(19, 'Bloodtainted Greatsword', 'Claymore', '3_star', 'Elemental Mastery'),
(20, 'Calamity Queller', 'Polearm', '5_star', 'ATK'),
(21, 'Cinnabar Spindle', 'Sword', '4_star', 'DEF'),
(22, 'Compound Bow', 'Bow', '4_star', 'Physical DMG Bonus'),
(23, 'Cool Steel', 'Sword', '3_star', 'ATK'),
(24, 'Crescent Pike', 'Polearm', '4_star', 'Physical DMG Bonus'),
(25, 'Deathmatch', 'Polearm', '4_star', 'CRIT Rate'),
(26, 'Debate Club', 'Claymore', '3_star', 'ATK'),
(27, 'Dodoco Tales', 'Catalyst', '4_star', 'ATK'),
(28, 'Dragon\'s Bane', 'Polearm', '4_star', 'Elemental Mastery'),
(29, 'Dragonspine Spear', 'Polearm', '4_star', 'Physical DMG Bonus'),
(30, 'Dull Blade', 'Sword', '1_star', ''),
(31, 'Elegy for the End', 'Bow', '5_star', 'Energy Recharge'),
(32, 'Emerald Orb', 'Catalyst', '3_star', 'Elemental Mastery'),
(33, 'End of the Line', 'Bow', '4_star', 'Energy Recharge'),
(34, 'Engulfing Lightning', 'Polearm', '5_star', 'Energy Recharge'),
(35, 'Everlasting Moonglow', 'Catalyst', '5_star', 'HP'),
(36, 'Eye of Perception', 'Catalyst', '4_star', 'ATK'),
(37, 'Favonius Codex', 'Catalyst', '4_star', 'Energy Recharge'),
(38, 'Favonius Greatsword', 'Claymore', '4_star', 'Energy Recharge'),
(39, 'Favonius Lance', 'Polearm', '4_star', 'Energy Recharge'),
(40, 'Favonius Sword', 'Sword', '4_star', 'Energy Recharge'),
(41, 'Favonius Warbow', 'Bow', '4_star', 'Energy Recharge'),
(42, 'Ferrous Shadow', 'Claymore', '3_star', 'HP'),
(43, 'Fillet Blade', 'Sword', '3_star', 'ATK'),
(44, 'Finale of the Deep', 'Sword', '4_star', 'ATK'),
(45, 'Fleuve Cendre Ferryman', 'Sword', '4_star', 'Energy Recharge'),
(46, 'Flowing Purity', 'Catalyst', '4_star', 'ATK'),
(47, 'Forest Regalia', 'Claymore', '4_star', 'Energy Recharge'),
(48, 'Freedom-Sworn', 'Sword', '5_star', 'Elemental Mastery'),
(49, 'Frostbearer', 'Catalyst', '4_star', 'ATK'),
(50, 'Fruit of Fulfillment', 'Catalyst', '4_star', 'Energy Recharge'),
(51, 'Hakushin Ring', 'Catalyst', '4_star', 'Energy Recharge'),
(52, 'Halberd', 'Polearm', '3_star', 'ATK'),
(53, 'Hamayumi', 'Bow', '4_star', 'ATK'),
(54, 'Haran Geppaku Futsu', 'Sword', '5_star', 'CRIT Rate'),
(55, 'Harbinger of Dawn', 'Sword', '3_star', 'CRIT DMG'),
(56, 'Hunter\'s Bow', 'Bow', '1_star', ''),
(57, 'Hunter\'s Path', 'Bow', '5_star', 'CRIT Rate'),
(58, 'Iron Point', 'Polearm', '2_star', ''),
(59, 'Iron Sting', 'Sword', '4_star', 'Elemental Mastery'),
(60, 'Jadefall\'s Splendor', 'Catalyst', '5_star', 'HP'),
(61, 'Kagotsurube Isshin', 'Sword', '4_star', 'ATK'),
(62, 'Kagura\'s Verity', 'Catalyst', '5_star', 'CRIT DMG'),
(63, 'Katsuragikiri Nagamasa', 'Claymore', '4_star', 'Energy Recharge'),
(64, 'Key of Khaj-Nisut', 'Sword', '5_star', 'HP'),
(65, 'King\'s Squire', 'Bow', '4_star', 'ATK'),
(66, 'Kitain Cross Spear', 'Polearm', '4_star', 'Elemental Mastery'),
(67, 'Light of Foliar Incision', 'Sword', '5_star', 'CRIT DMG'),
(68, 'Lion\'s Roar', 'Sword', '4_star', 'ATK'),
(69, 'Lithic Blade', 'Claymore', '4_star', 'ATK'),
(70, 'Lithic Spear', 'Polearm', '4_star', 'ATK'),
(71, 'Lost Prayer to the Sacred Winds', 'Catalyst', '5_star', 'CRIT Rate'),
(72, 'Luxurious Sea-Lord', 'Claymore', '4_star', 'ATK'),
(73, 'Magic Guide', 'Catalyst', '3_star', 'Elemental Mastery'),
(74, 'Mailed Flower', 'Claymore', '4_star', 'Elemental Mastery'),
(75, 'Makhaira Aquamarine', 'Claymore', '4_star', 'Elemental Mastery'),
(76, 'Mappa Mare', 'Catalyst', '4_star', 'Elemental Mastery'),
(77, 'Memory of Dust', 'Catalyst', '5_star', 'ATK'),
(78, 'Messenger', 'Bow', '3_star', 'CRIT DMG'),
(79, 'Missive Windspear', 'Polearm', '4_star', 'ATK'),
(80, 'Mistsplitter Reforged', 'Sword', '5_star', 'CRIT DMG'),
(81, 'Mitternachts Waltz', 'Bow', '4_star', 'Physical DMG Bonus'),
(82, 'Moonpiercer', 'Polearm', '4_star', 'Elemental Mastery'),
(83, 'Mouun\'s Moon', 'Bow', '4_star', 'ATK'),
(84, 'Oathsworn Eye', 'Catalyst', '4_star', 'ATK'),
(85, 'Old Merc\'s Pal', 'Claymore', '2_star', ''),
(86, 'Otherworldly Story', 'Catalyst', '3_star', 'Energy Recharge'),
(87, 'Pocket Grimoire', 'Catalyst', '2_star', ''),
(88, 'Polar Star', 'Bow', '5_star', 'CRIT Rate'),
(89, 'Primordial Jade Cutter', 'Sword', '5_star', 'CRIT Rate'),
(90, 'Primordial Jade Winged-Spear', 'Polearm', '5_star', 'CRIT Rate'),
(91, 'Prototype Amber', 'Catalyst', '4_star', 'HP'),
(92, 'Prototype Archaic', 'Claymore', '4_star', 'ATK'),
(93, 'Prototype Crescent', 'Bow', '4_star', 'ATK'),
(94, 'Prototype Rancour', 'Sword', '4_star', 'Physical DMG Bonus'),
(95, 'Prototype Starglitter', 'Polearm', '4_star', 'Energy Recharge'),
(96, 'Rainslasher', 'Claymore', '4_star', 'Elemental Mastery'),
(97, 'Raven Bow', 'Bow', '3_star', 'Elemental Mastery'),
(98, 'Recurve Bow', 'Bow', '3_star', 'HP'),
(99, 'Redhorn Stonethresher', 'Claymore', '5_star', 'CRIT DMG'),
(100, 'Rightful Reward', 'Polearm', '4_star', 'HP'),
(101, 'Royal Bow', 'Bow', '4_star', 'ATK'),
(102, 'Royal Greatsword', 'Claymore', '4_star', 'ATK'),
(103, 'Royal Grimoire', 'Catalyst', '4_star', 'ATK'),
(104, 'Royal Longsword', 'Sword', '4_star', 'ATK'),
(105, 'Royal Spear', 'Polearm', '4_star', 'ATK'),
(106, 'Rust', 'Bow', '4_star', 'ATK'),
(107, 'Sacrificial Bow', 'Bow', '4_star', 'Energy Recharge'),
(108, 'Sacrificial Fragments', 'Catalyst', '4_star', 'Elemental Mastery'),
(109, 'Sacrificial Greatsword', 'Claymore', '4_star', 'Energy Recharge'),
(110, 'Sacrificial Jade', 'Catalyst', '4_star', 'CRIT Rate'),
(111, 'Sacrificial Sword', 'Sword', '4_star', 'Energy Recharge'),
(112, 'Sapwood Blade', 'Sword', '4_star', 'Energy Recharge'),
(113, 'Scion of the Blazing Sun', 'Bow', '4_star', 'CRIT Rate'),
(114, 'Seasoned Hunter\'s Bow', 'Bow', '2_star', ''),
(115, 'Serpent Spine', 'Claymore', '4_star', 'CRIT Rate'),
(116, 'Sharpshooter\'s Oath', 'Bow', '3_star', 'CRIT DMG'),
(117, 'Silver Sword', 'Sword', '2_star', ''),
(118, 'Skyrider Greatsword', 'Claymore', '3_star', 'Physical DMG Bonus'),
(119, 'Skyrider Sword', 'Sword', '3_star', 'Energy Recharge'),
(120, 'Skyward Atlas', 'Catalyst', '5_star', 'ATK'),
(121, 'Skyward Blade', 'Sword', '5_star', 'Energy Recharge'),
(122, 'Skyward Harp', 'Bow', '5_star', 'CRIT Rate'),
(123, 'Skyward Pride', 'Claymore', '5_star', 'Energy Recharge'),
(124, 'Skyward Spine', 'Polearm', '5_star', 'Energy Recharge'),
(125, 'Slingshot', 'Bow', '3_star', 'CRIT Rate'),
(126, 'Snow-Tombed Starsilver', 'Claymore', '4_star', 'Physical DMG Bonus'),
(127, 'Solar Pearl', 'Catalyst', '4_star', 'CRIT Rate'),
(128, 'Song of Broken Pines', 'Claymore', '5_star', 'Physical DMG Bonus'),
(129, 'Song of Stillness', 'Bow', '4_star', 'ATK'),
(130, 'Staff of Homa', 'Polearm', '5_star', 'CRIT DMG'),
(131, 'Staff of the Scarlet Sands', 'Polearm', '5_star', 'CRIT Rate'),
(132, 'Summit Shaper', 'Sword', '5_star', 'ATK'),
(133, 'Sword of Descension', 'Sword', '4_star', 'ATK'),
(134, 'Talking Stick', 'Claymore', '4_star', 'CRIT Rate'),
(135, 'The Alley Flash', 'Sword', '4_star', 'Elemental Mastery'),
(136, 'The Bell', 'Claymore', '4_star', 'HP'),
(137, 'The Black Sword', 'Sword', '4_star', 'CRIT Rate'),
(138, 'The First Great Magic', 'Bow', '5_star', 'CRIT DMG'),
(139, 'The Flute', 'Sword', '4_star', 'ATK'),
(140, 'The Stringless', 'Bow', '4_star', 'Elemental Mastery'),
(141, 'The Unforged', 'Claymore', '5_star', 'ATK'),
(142, 'The Viridescent Hunt', 'Bow', '4_star', 'CRIT Rate'),
(143, 'The Widsith', 'Catalyst', '4_star', 'CRIT DMG'),
(144, 'Thrilling Tales of Dragon Slayers', 'Catalyst', '3_star', 'HP'),
(145, 'Thundering Pulse', 'Bow', '5_star', 'CRIT DMG'),
(146, 'Tidal Shadow', 'Claymore', '4_star', 'ATK'),
(147, 'Toukabou Shigure', 'Sword', '4_star', 'Elemental Mastery'),
(148, 'Traveler\'s Handy Sword', 'Sword', '3_star', 'DEF'),
(149, 'Tulaytullah\'s Remembrance', 'Catalyst', '5_star', 'CRIT DMG'),
(150, 'Twin Nephrite', 'Catalyst', '3_star', 'CRIT Rate'),
(151, 'Vortex Vanquisher', 'Polearm', '5_star', 'ATK'),
(152, 'Wandering Evenstar', 'Catalyst', '4_star', 'Elemental Mastery'),
(153, 'Waster Greatsword', 'Claymore', '1_star', ''),
(154, 'Wavebreaker\'s Fin', 'Polearm', '4_star', 'ATK'),
(155, 'White Iron Greatsword', 'Claymore', '3_star', 'DEF'),
(156, 'White Tassel', 'Polearm', '3_star', 'CRIT Rate'),
(157, 'Whiteblind', 'Claymore', '4_star', 'DEF'),
(158, 'Wine and Song', 'Catalyst', '4_star', 'Energy Recharge'),
(159, 'Wolf-Fang', 'Sword', '4_star', 'CRIT Rate'),
(160, 'Wolf\'s Gravestone', 'Claymore', '5_star', 'ATK'),
(161, 'Xiphos\' Moonlight', 'Sword', '4_star', 'Elemental Mastery'),
(162, 'Portable Power Saw', 'Claymore', '4_star', 'HP'),
(163, 'Tome of the Eternal Flow', 'Catalyst', '5_star', 'CRIT DMG'),
(164, 'The Dockhand\'s Assistant', 'Sword', '4_star', 'HP'),
(165, 'Prospector\'s Drill', 'Polearm', '4_star', 'ATK'),
(166, 'Range Gauge', 'Bow', '4_star', 'ATK'),
(167, 'Cashflow Supervision', 'Catalyst', '5_star', 'CRIT Rate'),
(168, 'Sword of Narzissenkreuz', 'Sword', '4_star', 'ATK'),
(169, '\"Ultimate Overlord\'s Mega Magic Sword\"', 'Claymore', '4_star', 'Energy Recharge'),
(174, 'Balad of the Boundless Blue', 'Catalyst', '4_star', 'Energy Recharge'),
(175, 'The Unforged', 'Claymore', '5_star', 'ATK'),
(176, 'Verdict', 'Claymore', '5_star', 'CRIT Rate');
--
-- Index pour les tables déchargées
--

--
-- Index pour la table `gen_artifacts`
--
ALTER TABLE `gen_artifacts`
  ADD PRIMARY KEY (`art_id`);

--
-- Index pour la table `gen_art_rarities`
--
ALTER TABLE `gen_art_rarities`
  ADD PRIMARY KEY (`art_rar_id`),
  ADD KEY `art_id` (`art_id`);

--
-- Index pour la table `gen_characters`
--
ALTER TABLE `gen_characters`
  ADD PRIMARY KEY (`cha_id`);

--
-- Index pour la table `gen_weapons`
--
ALTER TABLE `gen_weapons`
  ADD PRIMARY KEY (`wea_id`);

ALTER TABLE `gen_weapons`
  MODIFY `wea_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `gen_artifacts`
--
ALTER TABLE `gen_artifacts`
  MODIFY `art_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT pour la table `gen_art_rarities`
--
ALTER TABLE `gen_art_rarities`
  MODIFY `art_rar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT pour la table `gen_weapons`
--
ALTER TABLE `gen_weapons`
  MODIFY `wea_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;

--
-- AUTO_INCREMENT pour la table `gen_characters`
--
ALTER TABLE `gen_characters`
  MODIFY `cha_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;


--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `gen_art_rarities`
--
ALTER TABLE `gen_art_rarities`
  ADD CONSTRAINT `gen_art_rarities_ibfk_1` FOREIGN KEY (`art_id`) REFERENCES `gen_artifacts` (`art_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
