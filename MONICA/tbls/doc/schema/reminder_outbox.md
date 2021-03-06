# reminder_outbox

## Description

<details>
<summary><strong>Table Definition</strong></summary>

```sql
CREATE TABLE `reminder_outbox` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `account_id` int(10) unsigned NOT NULL,
  `reminder_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `planned_date` date NOT NULL,
  `nature` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'reminder',
  `notification_number_days_before` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `reminder_outbox_account_id_foreign` (`account_id`),
  KEY `reminder_outbox_reminder_id_foreign` (`reminder_id`),
  KEY `reminder_outbox_user_id_foreign` (`user_id`),
  CONSTRAINT `reminder_outbox_account_id_foreign` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`id`) ON DELETE CASCADE,
  CONSTRAINT `reminder_outbox_reminder_id_foreign` FOREIGN KEY (`reminder_id`) REFERENCES `reminders` (`id`) ON DELETE CASCADE,
  CONSTRAINT `reminder_outbox_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
```

</details>

## Columns

| Name | Type | Default | Nullable | Extra Definition | Children | Parents | Comment |
| ---- | ---- | ------- | -------- | --------------- | -------- | ------- | ------- |
| id | int(10) unsigned |  | false | auto_increment |  |  |  |
| account_id | int(10) unsigned |  | false |  |  | [accounts](accounts.md) |  |
| reminder_id | int(10) unsigned |  | false |  |  | [reminders](reminders.md) |  |
| user_id | int(10) unsigned |  | false |  |  | [users](users.md) |  |
| planned_date | date |  | false |  |  |  |  |
| nature | varchar(255) | reminder | false |  |  |  |  |
| notification_number_days_before | int(11) |  | true |  |  |  |  |
| created_at | timestamp |  | true |  |  |  |  |
| updated_at | timestamp |  | true |  |  |  |  |

## Constraints

| Name | Type | Definition |
| ---- | ---- | ---------- |
| PRIMARY | PRIMARY KEY | PRIMARY KEY (id) |
| reminder_outbox_account_id_foreign | FOREIGN KEY | FOREIGN KEY (account_id) REFERENCES accounts (id) |
| reminder_outbox_reminder_id_foreign | FOREIGN KEY | FOREIGN KEY (reminder_id) REFERENCES reminders (id) |
| reminder_outbox_user_id_foreign | FOREIGN KEY | FOREIGN KEY (user_id) REFERENCES users (id) |

## Indexes

| Name | Definition |
| ---- | ---------- |
| reminder_outbox_account_id_foreign | KEY reminder_outbox_account_id_foreign (account_id) USING BTREE |
| reminder_outbox_reminder_id_foreign | KEY reminder_outbox_reminder_id_foreign (reminder_id) USING BTREE |
| reminder_outbox_user_id_foreign | KEY reminder_outbox_user_id_foreign (user_id) USING BTREE |
| PRIMARY | PRIMARY KEY (id) USING BTREE |

## Relations

![er](reminder_outbox.svg)

---

> Generated by [tbls](https://github.com/k1LoW/tbls)
