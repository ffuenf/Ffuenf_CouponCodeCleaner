-- add table prefix if you have one
DELETE FROM core_config_data WHERE path like 'ffuenf_couponcodecleaner/%';
DELETE FROM core_config_data WHERE path like 'advanced/modules_disable_output/Ffuenf_CouponCodeCleaner';
DELETE FROM core_resource WHERE code = 'ffuenf_couponcodecleaner_setup';