CREATE TABLE `category` (
    id INT UNSIGNED AUTO_INCREMENT NOT NULL,
    parent_id INT UNSIGNED NOT NULL DEFAULT 0,
    name VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB;

CREATE TABLE `verification` (
    id BIGINT UNSIGNED AUTO_INCREMENT NOT NULL,
    code VARCHAR(36) NOT NULL,
    email VARCHAR(255) NOT NULL,
    is_verified TINYINT(1) DEFAULT 0,
    expired_at DATETIME NOT NULL,
    created_at DATETIME NOT NULL,
    UNIQUE code_uniq (code),
    PRIMARY KEY (id)
) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB;

CREATE TABLE `user` (
    id BIGINT UNSIGNED AUTO_INCREMENT NOT NULL,
    name VARCHAR(255) NOT NULL,
    kana VARCHAR(16) NOT NULL,
    nickname VARCHAR(32) NOT NULL,
    company VARCHAR(64) DEFAULT NULL,
    position VARCHAR(50) DEFAULT NULL,
    position_area VARCHAR(50) DEFAULT NULL,
    position_detail VARCHAR(128) DEFAULT NULL,
    email VARCHAR(255) NOT NULL,
    phone_number VARCHAR(40) DEFAULT NULL,
    postal_code VARCHAR(25) DEFAULT NULL,
    address_region VARCHAR(255) DEFAULT NULL,
    address_1 VARCHAR(255) DEFAULT NULL,
    address_2 VARCHAR(255) DEFAULT NULL,
    address_3 VARCHAR(255) DEFAULT NULL,
    birth INT(4) NOT NULL,
    password VARCHAR(255) NOT NULL,
    occupation VARCHAR(50) DEFAULT NULL,
    qualification TEXT DEFAULT NULL,
    introduction TEXT DEFAULT NULL,
    area_of_speciality VARCHAR(80) DEFAULT NULL,
    specialized_field VARCHAR(80) DEFAULT NULL,
    created_at DATETIME NOT NULL,
    updated_at DATETIME NOT NULL,
    UNIQUE KEY nickname_uniq (nickname),
    UNIQUE KEY email_uniq (email),
    PRIMARY KEY (id)
) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB;

CREATE TABLE `user_link` (
    id BIGINT UNSIGNED AUTO_INCREMENT NOT NULL,
    user_id BIGINT UNSIGNED NOT NULL,
    type VARCHAR(30) DEFAULT NULL,
    url VARCHAR(255) DEFAULT NULL,
    INDEX user_idx (user_id),
    PRIMARY KEY(id)
) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB;

CREATE TABLE `user_work_history` (
    id BIGINT UNSIGNED AUTO_INCREMENT NOT NULL,
    user_id BIGINT UNSIGNED NOT NULL,
    start_year INT(4) DEFAULT NULL,
    start_month INT(2) DEFAULT NULL,
    end_year INT(4) DEFAULT NULL,
    end_month INT(2) DEFAULT NULL,
    title VARCHAR(50) DEFAULT NULL,
    company_name VARCHAR(50) DEFAULT NULL,
    INDEX user_idx (user_id),
    PRIMARY KEY (id)
) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB;

CREATE TABLE `user_education_history` (
    id BIGINT UNSIGNED AUTO_INCREMENT NOT NULL,
    user_id BIGINT UNSIGNED NOT NULL,
    start_year INT(4) DEFAULT NULL,
    start_month INT(2) DEFAULT NULL,
    end_year INT(4) DEFAULT NULL,
    end_month INT(2) DEFAULT NULL,
    description VARCHAR(255) DEFAULT NULL,
    INDEX user_idx (user_id),
    PRIMARY KEY (id)
) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB;

CREATE TABLE `user_cv` (
    user_id BIGINT UNSIGNED NOT NULL,
    company_name VARCHAR(50) DEFAULT NULL,
    position VARCHAR(50) DEFAULT NULL,
    occupation VARCHAR(255) DEFAULT NULL,
    qualification VARCHAR(255) DEFAULT NULL,
    address VARCHAR(255) DEFAULT NULL,
    phone_number VARCHAR(255) DEFAULT NULL,
    introduction TEXT DEFAULT NULL,
    work_history TEXT DEFAULT NULL,
    education TEXT DEFAULT NULL,
    PRIMARY KEY (user_id)
) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB;

CREATE TABLE `question` (
    id BIGINT UNSIGNED AUTO_INCREMENT NOT NULL,
    hash VARCHAR(36) NOT NULL,
    user_id BIGINT UNSIGNED NOT NULL,
    category_id INT UNSIGNED NOT NULL,
    slug VARCHAR(255) NOT NULL,
    title VARCHAR(255) NOT NULL,
    question MEDIUMTEXT NOT NULL,
    keywords VARCHAR(255) DEFAULT NULL,
    created_at DATETIME NOT NULL,
    is_anonymous TINYINT(1) DEFAULT 0,
    is_solved TINYINT(1) DEFAULT 0,
    has_expert_answer TINYINT(1) DEFAULT 0,
    PRIMARY KEY (id)
) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB;

CREATE TABLE `question_image` (
    question_id BIGINT UNSIGNED NOT NULL,
    url VARCHAR(255) NOT NULL,
    PRIMARY KEY (question_id)
) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB;

CREATE TABLE `question_view` (
    question_id BIGINT UNSIGNED NOT NULL,
    date DATE NOT NULL,
    view_count BIGINT UNSIGNED NOT NULL,
    INDEX date_idx (date),
    PRIMARY KEY (question_id, date)
) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB;

CREATE TABLE `question_answer_count` (
    question_id BIGINT UNSIGNED NOT NULL,
    date DATE NOT NULL,
    answer_count BIGINT UNSIGNED NOT NULL,
    INDEX date_idx (date),
    PRIMARY KEY (question_id, date)
) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB;

CREATE TABLE `question_like_count` (
    question_id BIGINT UNSIGNED NOT NULL,
    date DATE NOT NULL,
    like_count BIGINT UNSIGNED NOT NULL,
    INDEX date_idx (date),
    PRIMARY KEY (question_id, date)
) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB;

CREATE TABLE `question_like` (
    question_id BIGINT UNSIGNED NOT NULL,
    user_id BIGINT UNSIGNED NOT NULL,
    created_at DATETIME NOT NULL,
    PRIMARY KEY (question_id, user_id)
) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB;

CREATE TABLE `question_tag` (
    question_id BIGINT UNSIGNED NOT NULL,
    tag_id BIGINT UNSIGNED NOT NULL,
    PRIMARY KEY (question_id, tag_id)
) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB;

CREATE TABLE `tag` (
    id BIGINT UNSIGNED AUTO_INCREMENT NOT NULL,
    name VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB;

CREATE TABLE `answer` (
    id BIGINT UNSIGNED AUTO_INCREMENT NOT NULL,
    question_id BIGINT UNSIGNED NOT NULL,
    user_id BIGINT UNSIGNED NOT NULL,
    message MEDIUMTEXT NOT NULL,
    created_at DATETIME NOT NULL,
    is_correct_answer TINYINT(1) DEFAULT 0,
    PRIMARY KEY (id)
) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB;

CREATE TABLE `answer_like` (
    answer_id BIGINT UNSIGNED NOT NULL,
    user_id BIGINT UNSIGNED NOT NULL,
    created_at DATETIME NOT NULL,
    UNIQUE KEY like_uniq (answer_id, user_id)
) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB;

CREATE TABLE `answer_notification_count` (
    user_id BIGINT UNSIGNED NOT NULL,
    notification_count BIGINT UNSIGNED NOT NULL,
    PRIMARY KEY (user_id)
) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB;


CREATE TABLE `bookmark` (
    id BIGINT UNSIGNED AUTO_INCREMENT NOT NULL,
    question_id BIGINT UNSIGNED NOT NULL,
    user_id BIGINT UNSIGNED NOT NULL,
    created_at DATE NOT NULL,
    PRIMARY KEY(id)
) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB;

CREATE TABLE `thread` (
    id VARCHAR(36) NOT NULL,
    subject VARCHAR(255) NOT NULL,
    created_at DATETIME NOT NULL,
    updated_at DATETIME NOT NULL,
    PRIMARY KEY(id)
) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB;

CREATE TABLE `thread_user` (
    thread_id VARCHAR(36) NOT NULL,
    user_id BIGINT UNSIGNED NOT NULL,
    PRIMARY KEY(thread_id, user_id)
) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB;

CREATE TABLE `message` (
    id BIGINT UNSIGNED AUTO_INCREMENT NOT NULL,
    thread_id VARCHAR(36) NOT NULL,
    user_id BIGINT UNSIGNED NOT NULL,
    message TEXT NOT NULL,
    created_at DATETIME NOT NULL,
    is_read TINYINT(1) DEFAULT 0,
    INDEX thread_idx (thread_id),
    PRIMARY KEY(id)
) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB;

CREATE OR REPLACE VIEW popular_tags AS
    SELECT tag.id, tag.name, (SELECT COUNT(*) FROM question_tag WHERE tag_id = tag.id) AS count FROM tag
    ORDER BY count DESC;
