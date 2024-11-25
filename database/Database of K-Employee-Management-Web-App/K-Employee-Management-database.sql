-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping data for table k-employee-management-database.attendances: ~0 rows (approximately)

-- Dumping data for table k-employee-management-database.departments: ~0 rows (approximately)

-- Dumping data for table k-employee-management-database.exports: ~5 rows (approximately)
INSERT IGNORE INTO `exports` (`id`, `completed_at`, `file_disk`, `file_name`, `exporter`, `processed_rows`, `total_rows`, `successful_rows`, `user_id`, `created_at`, `updated_at`) VALUES
	(1, NULL, 'public', 'export-1-attendances', 'App\\Filament\\Exports\\AttendancesExporter', 0, 9, 0, 1, '2024-11-15 09:06:53', '2024-11-15 09:06:53'),
	(2, NULL, 'public', 'export-2-attendances', 'App\\Filament\\Exports\\AttendancesExporter', 0, 9, 0, 1, '2024-11-15 15:49:34', '2024-11-15 15:49:34'),
	(3, NULL, 'public', 'export-3-attendances', 'App\\Filament\\Exports\\AttendancesExporter', 0, 9, 0, 1, '2024-11-15 15:50:36', '2024-11-15 15:50:36'),
	(4, '2024-11-15 15:53:37', 'public', 'export-4-attendances', 'App\\Filament\\Exports\\AttendancesExporter', 9, 9, 9, 1, '2024-11-15 15:53:35', '2024-11-15 15:53:37'),
	(5, '2024-11-15 16:08:50', 'public', 'export-5-attendances', 'App\\Filament\\Exports\\AttendancesExporter', 9, 9, 9, 1, '2024-11-15 16:08:50', '2024-11-15 16:08:50');

-- Dumping data for table k-employee-management-database.failed_import_rows: ~0 rows (approximately)

-- Dumping data for table k-employee-management-database.failed_jobs: ~0 rows (approximately)

-- Dumping data for table k-employee-management-database.imports: ~0 rows (approximately)

-- Dumping data for table k-employee-management-database.job_batches: ~2 rows (approximately)
INSERT IGNORE INTO `job_batches` (`id`, `name`, `total_jobs`, `pending_jobs`, `failed_jobs`, `failed_job_ids`, `options`, `cancelled_at`, `created_at`, `finished_at`) VALUES
	('9d7fa0a5-336e-4103-a007-914d06227292', '', 2, 0, 0, '[]', 'a:2:{s:13:"allowFailures";b:1;s:7:"finally";a:1:{i:0;O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:5442:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:1:{s:4:"next";O:46:"Filament\\Actions\\Exports\\Jobs\\ExportCompletion":7:{s:11:"\0*\0exporter";O:40:"App\\Filament\\Exports\\AttendancesExporter":3:{s:9:"\0*\0export";O:38:"Filament\\Actions\\Exports\\Models\\Export":30:{s:13:"\0*\0connection";s:5:"mysql";s:8:"\0*\0table";N;s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:12:"incrementing";b:1;s:7:"\0*\0with";a:0:{}s:12:"\0*\0withCount";a:0:{}s:19:"preventsLazyLoading";b:0;s:10:"\0*\0perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:1;s:28:"\0*\0escapeWhenCastingToString";b:0;s:13:"\0*\0attributes";a:8:{s:7:"user_id";i:1;s:8:"exporter";s:40:"App\\Filament\\Exports\\AttendancesExporter";s:10:"total_rows";i:9;s:9:"file_disk";s:6:"public";s:10:"updated_at";s:19:"2024-11-15 23:53:35";s:10:"created_at";s:19:"2024-11-15 23:53:35";s:2:"id";i:4;s:9:"file_name";s:20:"export-4-attendances";}s:11:"\0*\0original";a:8:{s:7:"user_id";i:1;s:8:"exporter";s:40:"App\\Filament\\Exports\\AttendancesExporter";s:10:"total_rows";i:9;s:9:"file_disk";s:6:"public";s:10:"updated_at";s:19:"2024-11-15 23:53:35";s:10:"created_at";s:19:"2024-11-15 23:53:35";s:2:"id";i:4;s:9:"file_name";s:20:"export-4-attendances";}s:10:"\0*\0changes";a:1:{s:9:"file_name";s:20:"export-4-attendances";}s:8:"\0*\0casts";a:4:{s:12:"completed_at";s:9:"timestamp";s:14:"processed_rows";s:7:"integer";s:10:"total_rows";s:7:"integer";s:15:"successful_rows";s:7:"integer";}s:17:"\0*\0classCastCache";a:0:{}s:21:"\0*\0attributeCastCache";a:0:{}s:13:"\0*\0dateFormat";N;s:10:"\0*\0appends";a:0:{}s:19:"\0*\0dispatchesEvents";a:0:{}s:14:"\0*\0observables";a:0:{}s:12:"\0*\0relations";a:0:{}s:10:"\0*\0touches";a:0:{}s:10:"timestamps";b:1;s:13:"usesUniqueIds";b:0;s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:11:"\0*\0fillable";a:0:{}s:10:"\0*\0guarded";a:0:{}}s:12:"\0*\0columnMap";a:6:{s:2:"id";s:2:"ID";s:7:"user_id";s:7:"User id";s:4:"date";s:4:"Date";s:6:"status";s:6:"Status";s:10:"created_at";s:10:"Created at";s:10:"updated_at";s:10:"Updated at";}s:10:"\0*\0options";a:0:{}}s:9:"\0*\0export";O:45:"Illuminate\\Contracts\\Database\\ModelIdentifier":5:{s:5:"class";s:38:"Filament\\Actions\\Exports\\Models\\Export";s:2:"id";i:4;s:9:"relations";a:0:{}s:10:"connection";s:5:"mysql";s:15:"collectionClass";N;}s:12:"\0*\0columnMap";a:6:{s:2:"id";s:2:"ID";s:7:"user_id";s:7:"User id";s:4:"date";s:4:"Date";s:6:"status";s:6:"Status";s:10:"created_at";s:10:"Created at";s:10:"updated_at";s:10:"Updated at";}s:10:"\0*\0formats";a:2:{i:0;E:47:"Filament\\Actions\\Exports\\Enums\\ExportFormat:Csv";i:1;E:48:"Filament\\Actions\\Exports\\Enums\\ExportFormat:Xlsx";}s:10:"\0*\0options";a:0:{}s:19:"chainCatchCallbacks";a:0:{}s:7:"chained";a:1:{i:0;s:2372:"O:44:"Filament\\Actions\\Exports\\Jobs\\CreateXlsxFile":4:{s:11:"\0*\0exporter";O:40:"App\\Filament\\Exports\\AttendancesExporter":3:{s:9:"\0*\0export";O:38:"Filament\\Actions\\Exports\\Models\\Export":30:{s:13:"\0*\0connection";s:5:"mysql";s:8:"\0*\0table";N;s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:12:"incrementing";b:1;s:7:"\0*\0with";a:0:{}s:12:"\0*\0withCount";a:0:{}s:19:"preventsLazyLoading";b:0;s:10:"\0*\0perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:1;s:28:"\0*\0escapeWhenCastingToString";b:0;s:13:"\0*\0attributes";a:8:{s:7:"user_id";i:1;s:8:"exporter";s:40:"App\\Filament\\Exports\\AttendancesExporter";s:10:"total_rows";i:9;s:9:"file_disk";s:6:"public";s:10:"updated_at";s:19:"2024-11-15 23:53:35";s:10:"created_at";s:19:"2024-11-15 23:53:35";s:2:"id";i:4;s:9:"file_name";s:20:"export-4-attendances";}s:11:"\0*\0original";a:8:{s:7:"user_id";i:1;s:8:"exporter";s:40:"App\\Filament\\Exports\\AttendancesExporter";s:10:"total_rows";i:9;s:9:"file_disk";s:6:"public";s:10:"updated_at";s:19:"2024-11-15 23:53:35";s:10:"created_at";s:19:"2024-11-15 23:53:35";s:2:"id";i:4;s:9:"file_name";s:20:"export-4-attendances";}s:10:"\0*\0changes";a:1:{s:9:"file_name";s:20:"export-4-attendances";}s:8:"\0*\0casts";a:4:{s:12:"completed_at";s:9:"timestamp";s:14:"processed_rows";s:7:"integer";s:10:"total_rows";s:7:"integer";s:15:"successful_rows";s:7:"integer";}s:17:"\0*\0classCastCache";a:0:{}s:21:"\0*\0attributeCastCache";a:0:{}s:13:"\0*\0dateFormat";N;s:10:"\0*\0appends";a:0:{}s:19:"\0*\0dispatchesEvents";a:0:{}s:14:"\0*\0observables";a:0:{}s:12:"\0*\0relations";a:0:{}s:10:"\0*\0touches";a:0:{}s:10:"timestamps";b:1;s:13:"usesUniqueIds";b:0;s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:11:"\0*\0fillable";a:0:{}s:10:"\0*\0guarded";a:0:{}}s:12:"\0*\0columnMap";a:6:{s:2:"id";s:2:"ID";s:7:"user_id";s:7:"User id";s:4:"date";s:4:"Date";s:6:"status";s:6:"Status";s:10:"created_at";s:10:"Created at";s:10:"updated_at";s:10:"Updated at";}s:10:"\0*\0options";a:0:{}}s:9:"\0*\0export";O:45:"Illuminate\\Contracts\\Database\\ModelIdentifier":5:{s:5:"class";s:38:"Filament\\Actions\\Exports\\Models\\Export";s:2:"id";i:4;s:9:"relations";a:0:{}s:10:"connection";s:5:"mysql";s:15:"collectionClass";N;}s:12:"\0*\0columnMap";a:6:{s:2:"id";s:2:"ID";s:7:"user_id";s:7:"User id";s:4:"date";s:4:"Date";s:6:"status";s:6:"Status";s:10:"created_at";s:10:"Created at";s:10:"updated_at";s:10:"Updated at";}s:10:"\0*\0options";a:0:{}}";}}}s:8:"function";s:266:"function (\\Illuminate\\Bus\\Batch $batch) use ($next) {\n                if (! $batch->cancelled()) {\n                    \\Illuminate\\Container\\Container::getInstance()->make(\\Illuminate\\Contracts\\Bus\\Dispatcher::class)->dispatch($next);\n                }\n            }";s:5:"scope";s:27:"Illuminate\\Bus\\ChainedBatch";s:4:"this";N;s:4:"self";s:32:"0000000000000d1e0000000000000000";}";s:4:"hash";s:44:"8J0Aoynfm7ro1mKcfZLGFWdvLScle/tNL9JZLnT8eX0=";}}}}', NULL, 1731714815, 1731714817),
	('9d7fa619-1408-452d-9606-27af1937888d', '', 2, 0, 0, '[]', 'a:2:{s:13:"allowFailures";b:1;s:7:"finally";a:1:{i:0;O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:5442:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:1:{s:4:"next";O:46:"Filament\\Actions\\Exports\\Jobs\\ExportCompletion":7:{s:11:"\0*\0exporter";O:40:"App\\Filament\\Exports\\AttendancesExporter":3:{s:9:"\0*\0export";O:38:"Filament\\Actions\\Exports\\Models\\Export":30:{s:13:"\0*\0connection";s:5:"mysql";s:8:"\0*\0table";N;s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:12:"incrementing";b:1;s:7:"\0*\0with";a:0:{}s:12:"\0*\0withCount";a:0:{}s:19:"preventsLazyLoading";b:0;s:10:"\0*\0perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:1;s:28:"\0*\0escapeWhenCastingToString";b:0;s:13:"\0*\0attributes";a:8:{s:7:"user_id";i:1;s:8:"exporter";s:40:"App\\Filament\\Exports\\AttendancesExporter";s:10:"total_rows";i:9;s:9:"file_disk";s:6:"public";s:10:"updated_at";s:19:"2024-11-16 00:08:50";s:10:"created_at";s:19:"2024-11-16 00:08:50";s:2:"id";i:5;s:9:"file_name";s:20:"export-5-attendances";}s:11:"\0*\0original";a:8:{s:7:"user_id";i:1;s:8:"exporter";s:40:"App\\Filament\\Exports\\AttendancesExporter";s:10:"total_rows";i:9;s:9:"file_disk";s:6:"public";s:10:"updated_at";s:19:"2024-11-16 00:08:50";s:10:"created_at";s:19:"2024-11-16 00:08:50";s:2:"id";i:5;s:9:"file_name";s:20:"export-5-attendances";}s:10:"\0*\0changes";a:1:{s:9:"file_name";s:20:"export-5-attendances";}s:8:"\0*\0casts";a:4:{s:12:"completed_at";s:9:"timestamp";s:14:"processed_rows";s:7:"integer";s:10:"total_rows";s:7:"integer";s:15:"successful_rows";s:7:"integer";}s:17:"\0*\0classCastCache";a:0:{}s:21:"\0*\0attributeCastCache";a:0:{}s:13:"\0*\0dateFormat";N;s:10:"\0*\0appends";a:0:{}s:19:"\0*\0dispatchesEvents";a:0:{}s:14:"\0*\0observables";a:0:{}s:12:"\0*\0relations";a:0:{}s:10:"\0*\0touches";a:0:{}s:10:"timestamps";b:1;s:13:"usesUniqueIds";b:0;s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:11:"\0*\0fillable";a:0:{}s:10:"\0*\0guarded";a:0:{}}s:12:"\0*\0columnMap";a:6:{s:2:"id";s:2:"ID";s:7:"user_id";s:7:"User id";s:4:"date";s:4:"Date";s:6:"status";s:6:"Status";s:10:"created_at";s:10:"Created at";s:10:"updated_at";s:10:"Updated at";}s:10:"\0*\0options";a:0:{}}s:9:"\0*\0export";O:45:"Illuminate\\Contracts\\Database\\ModelIdentifier":5:{s:5:"class";s:38:"Filament\\Actions\\Exports\\Models\\Export";s:2:"id";i:5;s:9:"relations";a:0:{}s:10:"connection";s:5:"mysql";s:15:"collectionClass";N;}s:12:"\0*\0columnMap";a:6:{s:2:"id";s:2:"ID";s:7:"user_id";s:7:"User id";s:4:"date";s:4:"Date";s:6:"status";s:6:"Status";s:10:"created_at";s:10:"Created at";s:10:"updated_at";s:10:"Updated at";}s:10:"\0*\0formats";a:2:{i:0;E:47:"Filament\\Actions\\Exports\\Enums\\ExportFormat:Csv";i:1;E:48:"Filament\\Actions\\Exports\\Enums\\ExportFormat:Xlsx";}s:10:"\0*\0options";a:0:{}s:19:"chainCatchCallbacks";a:0:{}s:7:"chained";a:1:{i:0;s:2372:"O:44:"Filament\\Actions\\Exports\\Jobs\\CreateXlsxFile":4:{s:11:"\0*\0exporter";O:40:"App\\Filament\\Exports\\AttendancesExporter":3:{s:9:"\0*\0export";O:38:"Filament\\Actions\\Exports\\Models\\Export":30:{s:13:"\0*\0connection";s:5:"mysql";s:8:"\0*\0table";N;s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:12:"incrementing";b:1;s:7:"\0*\0with";a:0:{}s:12:"\0*\0withCount";a:0:{}s:19:"preventsLazyLoading";b:0;s:10:"\0*\0perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:1;s:28:"\0*\0escapeWhenCastingToString";b:0;s:13:"\0*\0attributes";a:8:{s:7:"user_id";i:1;s:8:"exporter";s:40:"App\\Filament\\Exports\\AttendancesExporter";s:10:"total_rows";i:9;s:9:"file_disk";s:6:"public";s:10:"updated_at";s:19:"2024-11-16 00:08:50";s:10:"created_at";s:19:"2024-11-16 00:08:50";s:2:"id";i:5;s:9:"file_name";s:20:"export-5-attendances";}s:11:"\0*\0original";a:8:{s:7:"user_id";i:1;s:8:"exporter";s:40:"App\\Filament\\Exports\\AttendancesExporter";s:10:"total_rows";i:9;s:9:"file_disk";s:6:"public";s:10:"updated_at";s:19:"2024-11-16 00:08:50";s:10:"created_at";s:19:"2024-11-16 00:08:50";s:2:"id";i:5;s:9:"file_name";s:20:"export-5-attendances";}s:10:"\0*\0changes";a:1:{s:9:"file_name";s:20:"export-5-attendances";}s:8:"\0*\0casts";a:4:{s:12:"completed_at";s:9:"timestamp";s:14:"processed_rows";s:7:"integer";s:10:"total_rows";s:7:"integer";s:15:"successful_rows";s:7:"integer";}s:17:"\0*\0classCastCache";a:0:{}s:21:"\0*\0attributeCastCache";a:0:{}s:13:"\0*\0dateFormat";N;s:10:"\0*\0appends";a:0:{}s:19:"\0*\0dispatchesEvents";a:0:{}s:14:"\0*\0observables";a:0:{}s:12:"\0*\0relations";a:0:{}s:10:"\0*\0touches";a:0:{}s:10:"timestamps";b:1;s:13:"usesUniqueIds";b:0;s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:11:"\0*\0fillable";a:0:{}s:10:"\0*\0guarded";a:0:{}}s:12:"\0*\0columnMap";a:6:{s:2:"id";s:2:"ID";s:7:"user_id";s:7:"User id";s:4:"date";s:4:"Date";s:6:"status";s:6:"Status";s:10:"created_at";s:10:"Created at";s:10:"updated_at";s:10:"Updated at";}s:10:"\0*\0options";a:0:{}}s:9:"\0*\0export";O:45:"Illuminate\\Contracts\\Database\\ModelIdentifier":5:{s:5:"class";s:38:"Filament\\Actions\\Exports\\Models\\Export";s:2:"id";i:5;s:9:"relations";a:0:{}s:10:"connection";s:5:"mysql";s:15:"collectionClass";N;}s:12:"\0*\0columnMap";a:6:{s:2:"id";s:2:"ID";s:7:"user_id";s:7:"User id";s:4:"date";s:4:"Date";s:6:"status";s:6:"Status";s:10:"created_at";s:10:"Created at";s:10:"updated_at";s:10:"Updated at";}s:10:"\0*\0options";a:0:{}}";}}}s:8:"function";s:266:"function (\\Illuminate\\Bus\\Batch $batch) use ($next) {\n                if (! $batch->cancelled()) {\n                    \\Illuminate\\Container\\Container::getInstance()->make(\\Illuminate\\Contracts\\Bus\\Dispatcher::class)->dispatch($next);\n                }\n            }";s:5:"scope";s:27:"Illuminate\\Bus\\ChainedBatch";s:4:"this";N;s:4:"self";s:32:"0000000000000d1e0000000000000000";}";s:4:"hash";s:44:"P7ZBN1tgI/m2mAIStgdIo4smuYMxgxJvlpEMoQHNn04=";}}}}', NULL, 1731715730, 1731715730);

-- Dumping data for table k-employee-management-database.leave_requests: ~0 rows (approximately)

-- Dumping data for table k-employee-management-database.migrations: ~20 rows (approximately)
INSERT IGNORE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2024_10_28_090131_add_custom_fields_to_users_table', 1),
	(6, '2024_10_28_090132_add_avatar_url_to_users_table', 1),
	(7, '2024_10_28_091223_create_sessions_table', 1),
	(9, '2024_11_12_081256_create_departments_table', 1),
	(10, '2024_11_12_163326_add_two_factor_authentication_columns', 1),
	(11, '2024_11_13_010237_create_positions_table', 1),
	(12, '2024_11_13_130349_create_attendances_table', 1),
	(13, '2024_11_14_011217_create_payrolls_table', 1),
	(14, '2024_11_14_013247_create_leave_requests_table', 1),
	(15, '2024_11_14_041826_performance_reviews', 1),
	(16, '2024_10_29_100842_create_permission_tables', 2),
	(17, '2024_11_15_170624_create_imports_table', 3),
	(18, '2024_11_15_170625_create_exports_table', 3),
	(19, '2024_11_15_170626_create_failed_import_rows_table', 3),
	(20, '2024_11_15_235249_create_job_batches_table', 4),
	(21, '2024_11_15_235250_create_notifications_table', 4);

-- Dumping data for table k-employee-management-database.model_has_permissions: ~0 rows (approximately)

-- Dumping data for table k-employee-management-database.model_has_roles: ~2 rows (approximately)
INSERT IGNORE INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
	(1, 'App\\Models\\User', 1),
	(2, 'App\\Models\\User', 2);

-- Dumping data for table k-employee-management-database.notifications: ~2 rows (approximately)
INSERT IGNORE INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
	('b50c47c0-85c5-41a4-9b1f-9c371f1be4a7', 'Filament\\Notifications\\DatabaseNotification', 'App\\Models\\User', 1, '{"actions":[{"name":"download_csv","color":null,"event":null,"eventData":[],"dispatchDirection":false,"dispatchToComponent":null,"extraAttributes":[],"icon":null,"iconPosition":"before","iconSize":null,"isOutlined":false,"isDisabled":false,"label":"Download .csv","shouldClose":false,"shouldMarkAsRead":true,"shouldMarkAsUnread":false,"shouldOpenUrlInNewTab":true,"size":"sm","tooltip":null,"url":"\\/filament\\/exports\\/5\\/download?format=csv","view":"filament-actions::link-action"},{"name":"download_xlsx","color":null,"event":null,"eventData":[],"dispatchDirection":false,"dispatchToComponent":null,"extraAttributes":[],"icon":null,"iconPosition":"before","iconSize":null,"isOutlined":false,"isDisabled":false,"label":"Download .xlsx","shouldClose":false,"shouldMarkAsRead":true,"shouldMarkAsUnread":false,"shouldOpenUrlInNewTab":true,"size":"sm","tooltip":null,"url":"\\/filament\\/exports\\/5\\/download?format=xlsx","view":"filament-actions::link-action"}],"body":"Your attendances export has completed and 9 rows exported.","color":null,"duration":"persistent","icon":"heroicon-o-check-circle","iconColor":"success","status":"success","title":"Export completed","view":"filament-notifications::notification","viewData":[],"format":"filament"}', NULL, '2024-11-15 16:08:50', '2024-11-15 16:08:50'),
	('ca5754e0-c809-4792-b27e-cee7200a4a97', 'Filament\\Notifications\\DatabaseNotification', 'App\\Models\\User', 1, '{"actions":[{"name":"download_csv","color":null,"event":null,"eventData":[],"dispatchDirection":false,"dispatchToComponent":null,"extraAttributes":[],"icon":null,"iconPosition":"before","iconSize":null,"isOutlined":false,"isDisabled":false,"label":"Download .csv","shouldClose":false,"shouldMarkAsRead":true,"shouldMarkAsUnread":false,"shouldOpenUrlInNewTab":true,"size":"sm","tooltip":null,"url":"\\/filament\\/exports\\/4\\/download?format=csv","view":"filament-actions::link-action"},{"name":"download_xlsx","color":null,"event":null,"eventData":[],"dispatchDirection":false,"dispatchToComponent":null,"extraAttributes":[],"icon":null,"iconPosition":"before","iconSize":null,"isOutlined":false,"isDisabled":false,"label":"Download .xlsx","shouldClose":false,"shouldMarkAsRead":true,"shouldMarkAsUnread":false,"shouldOpenUrlInNewTab":true,"size":"sm","tooltip":null,"url":"\\/filament\\/exports\\/4\\/download?format=xlsx","view":"filament-actions::link-action"}],"body":"Your attendances export has completed and 9 rows exported.","color":null,"duration":"persistent","icon":"heroicon-o-check-circle","iconColor":"success","status":"success","title":"Export completed","view":"filament-notifications::notification","viewData":[],"format":"filament"}', NULL, '2024-11-15 15:53:38', '2024-11-15 15:53:38');

-- Dumping data for table k-employee-management-database.password_reset_tokens: ~0 rows (approximately)

-- Dumping data for table k-employee-management-database.payrolls: ~2 rows (approximately)

-- Dumping data for table k-employee-management-database.performance_reviews: ~0 rows (approximately)

-- Dumping data for table k-employee-management-database.permissions: ~140 rows (approximately)
INSERT IGNORE INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
	(1, 'view_attendances', 'web', '2024-11-14 18:31:52', '2024-11-14 18:31:52'),
	(2, 'view_any_attendances', 'web', '2024-11-14 18:31:52', '2024-11-14 18:31:52'),
	(3, 'create_attendances', 'web', '2024-11-14 18:31:52', '2024-11-14 18:31:52'),
	(4, 'update_attendances', 'web', '2024-11-14 18:31:52', '2024-11-14 18:31:52'),
	(5, 'restore_attendances', 'web', '2024-11-14 18:31:52', '2024-11-14 18:31:52'),
	(6, 'restore_any_attendances', 'web', '2024-11-14 18:31:52', '2024-11-14 18:31:52'),
	(7, 'replicate_attendances', 'web', '2024-11-14 18:31:52', '2024-11-14 18:31:52'),
	(8, 'reorder_attendances', 'web', '2024-11-14 18:31:52', '2024-11-14 18:31:52'),
	(9, 'delete_attendances', 'web', '2024-11-14 18:31:52', '2024-11-14 18:31:52'),
	(10, 'delete_any_attendances', 'web', '2024-11-14 18:31:52', '2024-11-14 18:31:52'),
	(11, 'force_delete_attendances', 'web', '2024-11-14 18:31:52', '2024-11-14 18:31:52'),
	(12, 'force_delete_any_attendances', 'web', '2024-11-14 18:31:52', '2024-11-14 18:31:52'),
	(13, 'view_department', 'web', '2024-11-14 18:31:53', '2024-11-14 18:31:53'),
	(14, 'view_any_department', 'web', '2024-11-14 18:31:53', '2024-11-14 18:31:53'),
	(15, 'create_department', 'web', '2024-11-14 18:31:53', '2024-11-14 18:31:53'),
	(16, 'update_department', 'web', '2024-11-14 18:31:53', '2024-11-14 18:31:53'),
	(17, 'restore_department', 'web', '2024-11-14 18:31:53', '2024-11-14 18:31:53'),
	(18, 'restore_any_department', 'web', '2024-11-14 18:31:53', '2024-11-14 18:31:53'),
	(19, 'replicate_department', 'web', '2024-11-14 18:31:53', '2024-11-14 18:31:53'),
	(20, 'reorder_department', 'web', '2024-11-14 18:31:53', '2024-11-14 18:31:53'),
	(21, 'delete_department', 'web', '2024-11-14 18:31:53', '2024-11-14 18:31:53'),
	(22, 'delete_any_department', 'web', '2024-11-14 18:31:53', '2024-11-14 18:31:53'),
	(23, 'force_delete_department', 'web', '2024-11-14 18:31:53', '2024-11-14 18:31:53'),
	(24, 'force_delete_any_department', 'web', '2024-11-14 18:31:53', '2024-11-14 18:31:53'),
	(25, 'view_leave::request', 'web', '2024-11-14 18:31:53', '2024-11-14 18:31:53'),
	(26, 'view_any_leave::request', 'web', '2024-11-14 18:31:53', '2024-11-14 18:31:53'),
	(27, 'create_leave::request', 'web', '2024-11-14 18:31:53', '2024-11-14 18:31:53'),
	(28, 'update_leave::request', 'web', '2024-11-14 18:31:53', '2024-11-14 18:31:53'),
	(29, 'restore_leave::request', 'web', '2024-11-14 18:31:53', '2024-11-14 18:31:53'),
	(30, 'restore_any_leave::request', 'web', '2024-11-14 18:31:53', '2024-11-14 18:31:53'),
	(31, 'replicate_leave::request', 'web', '2024-11-14 18:31:53', '2024-11-14 18:31:53'),
	(32, 'reorder_leave::request', 'web', '2024-11-14 18:31:53', '2024-11-14 18:31:53'),
	(33, 'delete_leave::request', 'web', '2024-11-14 18:31:53', '2024-11-14 18:31:53'),
	(34, 'delete_any_leave::request', 'web', '2024-11-14 18:31:53', '2024-11-14 18:31:53'),
	(35, 'force_delete_leave::request', 'web', '2024-11-14 18:31:53', '2024-11-14 18:31:53'),
	(36, 'force_delete_any_leave::request', 'web', '2024-11-14 18:31:53', '2024-11-14 18:31:53'),
	(37, 'view_payrolls', 'web', '2024-11-14 18:31:53', '2024-11-14 18:31:53'),
	(38, 'view_any_payrolls', 'web', '2024-11-14 18:31:53', '2024-11-14 18:31:53'),
	(39, 'create_payrolls', 'web', '2024-11-14 18:31:53', '2024-11-14 18:31:53'),
	(40, 'update_payrolls', 'web', '2024-11-14 18:31:53', '2024-11-14 18:31:53'),
	(41, 'restore_payrolls', 'web', '2024-11-14 18:31:53', '2024-11-14 18:31:53'),
	(42, 'restore_any_payrolls', 'web', '2024-11-14 18:31:53', '2024-11-14 18:31:53'),
	(43, 'replicate_payrolls', 'web', '2024-11-14 18:31:54', '2024-11-14 18:31:54'),
	(44, 'reorder_payrolls', 'web', '2024-11-14 18:31:54', '2024-11-14 18:31:54'),
	(45, 'delete_payrolls', 'web', '2024-11-14 18:31:54', '2024-11-14 18:31:54'),
	(46, 'delete_any_payrolls', 'web', '2024-11-14 18:31:54', '2024-11-14 18:31:54'),
	(47, 'force_delete_payrolls', 'web', '2024-11-14 18:31:54', '2024-11-14 18:31:54'),
	(48, 'force_delete_any_payrolls', 'web', '2024-11-14 18:31:54', '2024-11-14 18:31:54'),
	(49, 'view_performance::reviews', 'web', '2024-11-14 18:31:54', '2024-11-14 18:31:54'),
	(50, 'view_any_performance::reviews', 'web', '2024-11-14 18:31:54', '2024-11-14 18:31:54'),
	(51, 'create_performance::reviews', 'web', '2024-11-14 18:31:54', '2024-11-14 18:31:54'),
	(52, 'update_performance::reviews', 'web', '2024-11-14 18:31:54', '2024-11-14 18:31:54'),
	(53, 'restore_performance::reviews', 'web', '2024-11-14 18:31:54', '2024-11-14 18:31:54'),
	(54, 'restore_any_performance::reviews', 'web', '2024-11-14 18:31:54', '2024-11-14 18:31:54'),
	(55, 'replicate_performance::reviews', 'web', '2024-11-14 18:31:54', '2024-11-14 18:31:54'),
	(56, 'reorder_performance::reviews', 'web', '2024-11-14 18:31:54', '2024-11-14 18:31:54'),
	(57, 'delete_performance::reviews', 'web', '2024-11-14 18:31:54', '2024-11-14 18:31:54'),
	(58, 'delete_any_performance::reviews', 'web', '2024-11-14 18:31:54', '2024-11-14 18:31:54'),
	(59, 'force_delete_performance::reviews', 'web', '2024-11-14 18:31:54', '2024-11-14 18:31:54'),
	(60, 'force_delete_any_performance::reviews', 'web', '2024-11-14 18:31:54', '2024-11-14 18:31:54'),
	(61, 'view_position', 'web', '2024-11-14 18:31:54', '2024-11-14 18:31:54'),
	(62, 'view_any_position', 'web', '2024-11-14 18:31:54', '2024-11-14 18:31:54'),
	(63, 'create_position', 'web', '2024-11-14 18:31:54', '2024-11-14 18:31:54'),
	(64, 'update_position', 'web', '2024-11-14 18:31:54', '2024-11-14 18:31:54'),
	(65, 'restore_position', 'web', '2024-11-14 18:31:54', '2024-11-14 18:31:54'),
	(66, 'restore_any_position', 'web', '2024-11-14 18:31:54', '2024-11-14 18:31:54'),
	(67, 'replicate_position', 'web', '2024-11-14 18:31:54', '2024-11-14 18:31:54'),
	(68, 'reorder_position', 'web', '2024-11-14 18:31:54', '2024-11-14 18:31:54'),
	(69, 'delete_position', 'web', '2024-11-14 18:31:54', '2024-11-14 18:31:54'),
	(70, 'delete_any_position', 'web', '2024-11-14 18:31:54', '2024-11-14 18:31:54'),
	(71, 'force_delete_position', 'web', '2024-11-14 18:31:55', '2024-11-14 18:31:55'),
	(72, 'force_delete_any_position', 'web', '2024-11-14 18:31:55', '2024-11-14 18:31:55'),
	(73, 'view_shield::role', 'web', '2024-11-14 18:31:55', '2024-11-14 18:31:55'),
	(74, 'view_any_shield::role', 'web', '2024-11-14 18:31:55', '2024-11-14 18:31:55'),
	(75, 'create_shield::role', 'web', '2024-11-14 18:31:55', '2024-11-14 18:31:55'),
	(76, 'update_shield::role', 'web', '2024-11-14 18:31:55', '2024-11-14 18:31:55'),
	(77, 'delete_shield::role', 'web', '2024-11-14 18:31:55', '2024-11-14 18:31:55'),
	(78, 'delete_any_shield::role', 'web', '2024-11-14 18:31:55', '2024-11-14 18:31:55'),
	(79, 'view_user', 'web', '2024-11-14 18:31:55', '2024-11-14 18:31:55'),
	(80, 'view_any_user', 'web', '2024-11-14 18:31:55', '2024-11-14 18:31:55'),
	(81, 'create_user', 'web', '2024-11-14 18:31:55', '2024-11-14 18:31:55'),
	(82, 'update_user', 'web', '2024-11-14 18:31:55', '2024-11-14 18:31:55'),
	(83, 'restore_user', 'web', '2024-11-14 18:31:55', '2024-11-14 18:31:55'),
	(84, 'restore_any_user', 'web', '2024-11-14 18:31:55', '2024-11-14 18:31:55'),
	(85, 'replicate_user', 'web', '2024-11-14 18:31:55', '2024-11-14 18:31:55'),
	(86, 'reorder_user', 'web', '2024-11-14 18:31:55', '2024-11-14 18:31:55'),
	(87, 'delete_user', 'web', '2024-11-14 18:31:55', '2024-11-14 18:31:55'),
	(88, 'delete_any_user', 'web', '2024-11-14 18:31:55', '2024-11-14 18:31:55'),
	(89, 'force_delete_user', 'web', '2024-11-14 18:31:55', '2024-11-14 18:31:55'),
	(90, 'force_delete_any_user', 'web', '2024-11-14 18:31:55', '2024-11-14 18:31:55'),
	(91, 'page_EditProfilePage', 'web', '2024-11-14 18:31:56', '2024-11-14 18:31:56'),
	(92, 'view_any_leave::request::employee', 'web', '2024-11-14 23:32:25', '2024-11-14 23:32:25'),
	(93, 'create_leave::request::employee', 'web', '2024-11-14 23:32:25', '2024-11-14 23:32:25'),
	(94, 'delete_leave::request::employee', 'web', '2024-11-14 23:36:32', '2024-11-14 23:36:32'),
	(95, 'view_any_performance::review::employee', 'web', '2024-11-15 00:44:01', '2024-11-15 00:44:01'),
	(96, 'view_attendanceemployee', 'web', '2024-11-16 20:42:07', '2024-11-16 20:42:07'),
	(97, 'view_any_attendanceemployee', 'web', '2024-11-16 20:42:07', '2024-11-16 20:42:07'),
	(98, 'create_attendanceemployee', 'web', '2024-11-16 20:42:07', '2024-11-16 20:42:07'),
	(99, 'update_attendanceemployee', 'web', '2024-11-16 20:42:07', '2024-11-16 20:42:07'),
	(100, 'restore_attendanceemployee', 'web', '2024-11-16 20:42:07', '2024-11-16 20:42:07'),
	(101, 'restore_any_attendanceemployee', 'web', '2024-11-16 20:42:07', '2024-11-16 20:42:07'),
	(102, 'replicate_attendanceemployee', 'web', '2024-11-16 20:42:07', '2024-11-16 20:42:07'),
	(103, 'reorder_attendanceemployee', 'web', '2024-11-16 20:42:07', '2024-11-16 20:42:07'),
	(104, 'delete_attendanceemployee', 'web', '2024-11-16 20:42:07', '2024-11-16 20:42:07'),
	(105, 'delete_any_attendanceemployee', 'web', '2024-11-16 20:42:07', '2024-11-16 20:42:07'),
	(106, 'force_delete_attendanceemployee', 'web', '2024-11-16 20:42:07', '2024-11-16 20:42:07'),
	(107, 'force_delete_any_attendanceemployee', 'web', '2024-11-16 20:42:07', '2024-11-16 20:42:07'),
	(108, 'view_leave::request::employee', 'web', '2024-11-16 20:42:08', '2024-11-16 20:42:08'),
	(109, 'update_leave::request::employee', 'web', '2024-11-16 20:42:08', '2024-11-16 20:42:08'),
	(110, 'restore_leave::request::employee', 'web', '2024-11-16 20:42:08', '2024-11-16 20:42:08'),
	(111, 'restore_any_leave::request::employee', 'web', '2024-11-16 20:42:08', '2024-11-16 20:42:08'),
	(112, 'replicate_leave::request::employee', 'web', '2024-11-16 20:42:08', '2024-11-16 20:42:08'),
	(113, 'reorder_leave::request::employee', 'web', '2024-11-16 20:42:08', '2024-11-16 20:42:08'),
	(114, 'delete_any_leave::request::employee', 'web', '2024-11-16 20:42:08', '2024-11-16 20:42:08'),
	(115, 'force_delete_leave::request::employee', 'web', '2024-11-16 20:42:08', '2024-11-16 20:42:08'),
	(116, 'force_delete_any_leave::request::employee', 'web', '2024-11-16 20:42:08', '2024-11-16 20:42:08'),
	(117, 'view_payroll::employee', 'web', '2024-11-16 20:42:08', '2024-11-16 20:42:08'),
	(118, 'view_any_payroll::employee', 'web', '2024-11-16 20:42:08', '2024-11-16 20:42:08'),
	(119, 'create_payroll::employee', 'web', '2024-11-16 20:42:08', '2024-11-16 20:42:08'),
	(120, 'update_payroll::employee', 'web', '2024-11-16 20:42:08', '2024-11-16 20:42:08'),
	(121, 'restore_payroll::employee', 'web', '2024-11-16 20:42:08', '2024-11-16 20:42:08'),
	(122, 'restore_any_payroll::employee', 'web', '2024-11-16 20:42:08', '2024-11-16 20:42:08'),
	(123, 'replicate_payroll::employee', 'web', '2024-11-16 20:42:08', '2024-11-16 20:42:08'),
	(124, 'reorder_payroll::employee', 'web', '2024-11-16 20:42:08', '2024-11-16 20:42:08'),
	(125, 'delete_payroll::employee', 'web', '2024-11-16 20:42:08', '2024-11-16 20:42:08'),
	(126, 'delete_any_payroll::employee', 'web', '2024-11-16 20:42:08', '2024-11-16 20:42:08'),
	(127, 'force_delete_payroll::employee', 'web', '2024-11-16 20:42:08', '2024-11-16 20:42:08'),
	(128, 'force_delete_any_payroll::employee', 'web', '2024-11-16 20:42:08', '2024-11-16 20:42:08'),
	(129, 'view_performance::review::employee', 'web', '2024-11-16 20:42:08', '2024-11-16 20:42:08'),
	(130, 'create_performance::review::employee', 'web', '2024-11-16 20:42:08', '2024-11-16 20:42:08'),
	(131, 'update_performance::review::employee', 'web', '2024-11-16 20:42:08', '2024-11-16 20:42:08'),
	(132, 'restore_performance::review::employee', 'web', '2024-11-16 20:42:09', '2024-11-16 20:42:09'),
	(133, 'restore_any_performance::review::employee', 'web', '2024-11-16 20:42:09', '2024-11-16 20:42:09'),
	(134, 'replicate_performance::review::employee', 'web', '2024-11-16 20:42:09', '2024-11-16 20:42:09'),
	(135, 'reorder_performance::review::employee', 'web', '2024-11-16 20:42:09', '2024-11-16 20:42:09'),
	(136, 'delete_performance::review::employee', 'web', '2024-11-16 20:42:09', '2024-11-16 20:42:09'),
	(137, 'delete_any_performance::review::employee', 'web', '2024-11-16 20:42:09', '2024-11-16 20:42:09'),
	(138, 'force_delete_performance::review::employee', 'web', '2024-11-16 20:42:09', '2024-11-16 20:42:09'),
	(139, 'force_delete_any_performance::review::employee', 'web', '2024-11-16 20:42:09', '2024-11-16 20:42:09'),
	(140, 'widget_DashboardWidget', 'web', '2024-11-16 20:42:09', '2024-11-16 20:42:09');

-- Dumping data for table k-employee-management-database.personal_access_tokens: ~0 rows (approximately)

-- Dumping data for table k-employee-management-database.positions: ~0 rows (approximately)

-- Dumping data for table k-employee-management-database.roles: ~2 rows (approximately)
INSERT IGNORE INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
	(1, 'super_admin', 'web', '2024-11-14 18:31:52', '2024-11-14 18:31:52'),
	(2, 'panel_user', 'web', '2024-11-14 18:31:56', '2024-11-14 18:31:56');

-- Dumping data for table k-employee-management-database.role_has_permissions: ~147 rows (approximately)
INSERT IGNORE INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
	(1, 1),
	(2, 1),
	(3, 1),
	(4, 1),
	(5, 1),
	(6, 1),
	(7, 1),
	(8, 1),
	(9, 1),
	(10, 1),
	(11, 1),
	(12, 1),
	(13, 1),
	(14, 1),
	(15, 1),
	(16, 1),
	(17, 1),
	(18, 1),
	(19, 1),
	(20, 1),
	(21, 1),
	(22, 1),
	(23, 1),
	(24, 1),
	(25, 1),
	(26, 1),
	(27, 1),
	(28, 1),
	(29, 1),
	(30, 1),
	(31, 1),
	(32, 1),
	(33, 1),
	(34, 1),
	(35, 1),
	(36, 1),
	(37, 1),
	(38, 1),
	(39, 1),
	(40, 1),
	(41, 1),
	(42, 1),
	(43, 1),
	(44, 1),
	(45, 1),
	(46, 1),
	(47, 1),
	(48, 1),
	(49, 1),
	(50, 1),
	(51, 1),
	(52, 1),
	(53, 1),
	(54, 1),
	(55, 1),
	(56, 1),
	(57, 1),
	(58, 1),
	(59, 1),
	(60, 1),
	(61, 1),
	(62, 1),
	(63, 1),
	(64, 1),
	(65, 1),
	(66, 1),
	(67, 1),
	(68, 1),
	(69, 1),
	(70, 1),
	(71, 1),
	(72, 1),
	(73, 1),
	(74, 1),
	(75, 1),
	(76, 1),
	(77, 1),
	(78, 1),
	(79, 1),
	(80, 1),
	(81, 1),
	(82, 1),
	(83, 1),
	(84, 1),
	(85, 1),
	(86, 1),
	(87, 1),
	(88, 1),
	(89, 1),
	(90, 1),
	(91, 1),
	(92, 1),
	(93, 1),
	(94, 1),
	(95, 1),
	(96, 1),
	(97, 1),
	(98, 1),
	(99, 1),
	(100, 1),
	(101, 1),
	(102, 1),
	(103, 1),
	(104, 1),
	(105, 1),
	(106, 1),
	(107, 1),
	(108, 1),
	(109, 1),
	(110, 1),
	(111, 1),
	(112, 1),
	(113, 1),
	(114, 1),
	(115, 1),
	(116, 1),
	(117, 1),
	(118, 1),
	(119, 1),
	(120, 1),
	(121, 1),
	(122, 1),
	(123, 1),
	(124, 1),
	(125, 1),
	(126, 1),
	(127, 1),
	(128, 1),
	(129, 1),
	(130, 1),
	(131, 1),
	(132, 1),
	(133, 1),
	(134, 1),
	(135, 1),
	(136, 1),
	(137, 1),
	(138, 1),
	(139, 1),
	(140, 1),
	(2, 2),
	(3, 2),
	(26, 2),
	(27, 2),
	(38, 2),
	(50, 2),
	(91, 2);

-- Dumping data for table k-employee-management-database.sessions: ~3 rows (approximately)
INSERT IGNORE INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('aSYtSfdLrsPVrCTPpfM2vxNRxaqZZqJvej1pN9bV', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoibjlhVEEzV21tSWI1dHc4dHJIMDBGeEFoSGhvVUpUcjNlR0V4aUxUdiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NjI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9LLUVtcGxveWVlLU1hbmFnZW1lbnQtV2ViLUFwcC9teS1wcm9maWxlIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEyJHguUEpBUnNSWGhjeEFNbFoya0hseS5ZMTNiWmZnUXkyYnpIaUNLTy9BRmlPR2hFS1lqVmRPIjtzOjE3OiJEYXNoYm9hcmRfZmlsdGVycyI7TjtzOjg6ImZpbGFtZW50IjthOjA6e319', 1731819781),
	('BIGBB5usnSTidOAXhtLjlcqru1QLRBV22rx6xQ5s', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiWGlTT2t6Q3FFdm1aUWRmdndlQ29TRUNCU0lIWWJjSVU5V05YUWhKUiI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czo2MjoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL0stRW1wbG95ZWUtTWFuYWdlbWVudC1XZWItQXBwL215LXByb2ZpbGUiO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo1NzoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL0stRW1wbG95ZWUtTWFuYWdlbWVudC1XZWItQXBwL2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1731815211),
	('yMWBlXZJS8NyGXROQBe0WIO6vAivQRpwFC0kWrLC', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiVXVFOTNjamZmcHZpVkFkZGtza1I2SlBEekJ5S1hKZ0Fza0VvZW4xNSI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjgwOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvSy1FbXBsb3llZS1NYW5hZ2VtZW50LVdlYi1BcHAvcGVyZm9ybWFuY2UtcmV2aWV3LWVtcGxveWVlcyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMiR0ZDkvbldyMnpGV0QwODJ1ZEhOamcuY0kzUWhEaWxJV2JmSmlRSEFNcmQ0czJqQUw1Q2JvMiI7czoxNzoiRGFzaGJvYXJkX2ZpbHRlcnMiO047fQ==', 1731817640);

-- Dumping data for table k-employee-management-database.users: ~2 rows (approximately)
INSERT IGNORE INTO `users` (`id`, `name`, `email`, `department_id`, `position_id`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `created_at`, `updated_at`, `custom_fields`, `avatar_url`) VALUES
	(1, 'super admin', 'superadmin@gmail.com', NULL, NULL, '2024-11-14 18:30:46', '$2y$12$x.PJARsRXhcxAMlZ2kHly.Y13bZfgQy2bzHiCKO/AFiOGhEKYjVdO', NULL, NULL, NULL, 'FcHd1FW3SzxsoEACnlMRUb7yh295w4QYrMaVYRyiqtUmiw65IZxqAUwTOIWS', '2024-11-14 18:30:46', '2024-11-16 20:39:48', NULL, NULL),
	(2, 'employee', 'employee@gmail.com', NULL, NULL, '2024-11-14 18:30:47', '$2y$12$td9/nWr2zFWD082udHNjg.cI3QhDilIWbfJiQHAMrd4s2jAL5Cbo2', NULL, NULL, NULL, 'Fjuyw6g9DNdrpxfEqASAnOuCMNU77iies30qHOzNXN8u7b9iSVqxpXYT1t1Y', '2024-11-14 18:30:47', '2024-11-14 18:30:47', NULL, NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
