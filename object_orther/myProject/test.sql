-- 建立table
CREATE TABLE `db0722`.`students` (
    `id` INT(10) NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
    `mobile` VARCHAR(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB CHARSET = utf8mb4 COLLATE utf8mb4_unicode_ci;

-- 建立table
CREATE TABLE `db0722`.`teachers` (
    `id` INT(10) NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
    `mobile` VARCHAR(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB CHARSET = utf8mb4 COLLATE utf8mb4_unicode_ci;

-- 清空資料表
TRUNCATE TABLE `db0722`.`students` -- 刪除資料表
DROP TABLE `db0722`.`students` -- 查詢
SELECT
    *
FROM
    `students` -- 單筆新增
INSERT INTO
    `students` (`id`, `name`, `mobile`)
VALUES
    (NULL, 'amy', '0911-111-111');

INSERT INTO
    `students` (`id`, `name`, `mobile`)
VALUES
    (NULL, 'bob', '0922-222-222');

INSERT INTO
    `students` (`id`, `name`, `mobile`)
VALUES
    (NULL, 'cat', '0933-333-333');

INSERT INTO
    `students` (`id`, `name`, `mobile`)
VALUES
    (NULL, 'dog', '0944-444-444');

-- 單筆新增
INSERT INTO
    `students` (`id`, `name`, `mobile`)
VALUES
    (NULL, 'amy', '0911-111-111'),
    (NULL, 'bob', '0922-222-222'),
    (NULL, 'cat', '0933-333-333'),
    (NULL, 'dog', '0944-444-444');

-- 單筆修改
UPDATE
    `students`
SET
    `name` = 'cat123'
WHERE
    `students`.`id` = 3;


-- 單筆刪除
DELETE FROM students WHERE `students`.`id` = 4