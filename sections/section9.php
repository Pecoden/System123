<?php
require_once __DIR__ . '/../config/config.php';

try {
    $stmt = $pdo->query("SELECT username, role, phone, email, working_hours, created_at FROM users");
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Error fetching users: " . $e->getMessage());
}
?>
<div class="data-layout-selected u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
    <div class="u-layout">
        <div class="u-layout-row">
            <div class="u-container-style u-layout-cell u-palette-1-dark-3 u-size-50-lg u-size-50-md u-size-50-sm u-size-50-xs u-size-51-xl u-layout-cell-1">
                <div class="u-container-layout u-valign-bottom-xs u-container-layout-1">
                    <div class="u-container-style u-expanded-width u-group u-white u-group-1">
                        <div class="u-container-layout u-container-layout-2">
                            <a href="#popup-cf10" class="u-align-left u-border-none u-btn u-button-style u-dialog-link u-hover-feature u-hover-palette-2-base u-palette-1-base u-btn-1">إضافة مستخدم جديد</a>
                            <h4 class="u-align-right u-text u-text-default u-text-1">ادارة المستخدمين</h4>
                            <div class="u-align-center u-border-2 u-border-grey-10 u-expanded-width u-line u-line-horizontal u-opacity u-opacity-50 u-line-1"></div>
                            <div class="rtl u-align-right u-form u-form-1">
                                <form action="#" class="u-clearfix u-form-horizontal u-inner-form" source="email" name="form" style="padding: 1px;">
                                    <div class="u-form-email u-form-group u-label-none">
                                        <label for="email-db12" class="u-label">Email</label>
                                        <input type="email" placeholder="ابحث عن مستخدم" id="email-db12" name="search" class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-base u-grey-5 u-input u-input-rectangle u-radius u-input-1" required="">
                                    </div>
                                    <div class="u-align-left u-form-group u-form-submit u-label-none">
                                        <a href="#" class="u-border-none u-btn u-btn-submit u-button-style u-palette-1-base u-btn-2"></a>
                                        <input type="submit" value="submit" class="u-form-control-hidden">
                                    </div>
                                    <div class="u-form-send-message u-form-send-success">Thank you! Your message has been sent.</div>
                                    <div class="u-form-send-error u-form-send-message">Unable to send your message. Please fix errors then try again.</div>
                                    <input type="hidden" value="" name="recaptchaResponse">
                                </form>
                            </div>
                            <div class="u-align-center u-expanded-width u-table u-table-responsive u-table-1">
                                <table class="u-table-entity">
                                    <colgroup>
                                        <col width="3.2%">
                                        <col width="25.8%">
                                        <col width="17.5%">
                                        <col width="2.2%">
                                        <col width="25.9%">
                                        <col width="11.4%">
                                        <col width="14.000000000000009%">
                                    </colgroup>
                                    <thead class="u-align-center u-palette-1-base u-table-header u-table-header-1">
                                        <tr style="height: 30px;">
                                            <th class="u-table-cell u-white u-table-cell-1"></th>
                                            <th class="u-border-1 u-border-grey-10 u-table-cell">آخر تسجيل دخول</th>
                                            <th class="u-border-1 u-border-grey-10 u-table-cell">الحالة</th>
                                            <th class="u-border-1 u-border-grey-10 u-table-cell">البريد الإلكتروني</th>
                                            <th class="u-align-center u-border-1 u-border-grey-10 u-table-cell">رقم الهاتف</th>
                                            <th class="u-align-center u-border-1 u-border-grey-10 u-table-cell">الدور</th>
                                            <th class="u-align-center u-border-1 u-border-grey-10 u-table-cell">اسم المستخدم</th>
                                        </tr>
                                    </thead>
                                    <tbody class="u-align-center u-table-body">
                                        <?php foreach ($users as $user): ?>
                                        <tr style="height: 30px;">
                                            <td onclick="details_sec5()" class="cursor u-border-2 u-border-grey-10 u-border-no-left u-border-no-right u-table-cell u-text-palette-1-base">التفاصيل</td>
                                            <td class="u-border-2 u-border-grey-10 u-border-no-left u-border-no-right u-table-cell"><?= htmlspecialchars($user['created_at']) ?></td>
                                            <td class="u-border-2 u-border-grey-10 u-border-no-left u-border-no-right u-table-cell"><?= $user['working_hours'] > 0 ? "نشط({$user['working_hours']}د)" : "غير نشط" ?></td>
                                            <td class="u-border-2 u-border-grey-10 u-border-no-left u-border-no-right u-table-cell"><?= htmlspecialchars($user['email']) ?></td>
                                            <td class="u-border-2 u-border-grey-10 u-border-no-left u-border-no-right u-table-cell"><?= htmlspecialchars($user['phone']) ?></td>
                                            <td class="u-border-2 u-border-grey-10 u-border-no-left u-border-no-right u-table-cell"><?= htmlspecialchars($user['role']) ?></td>
                                            <td class="u-border-2 u-border-grey-10 u-border-no-left u-border-no-right u-table-cell"><?= htmlspecialchars($user['username']) ?></td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="u-container-style u-hidden-xs u-layout-cell u-palette-1-dark-3 u-size-10-lg u-size-10-md u-size-10-sm u-size-10-xs u-size-9-xl u-layout-cell-2" title="">
                <div class="u-container-layout u-valign-bottom-lg u-valign-bottom-md u-valign-bottom-xl u-valign-top-sm u-valign-top-xs u-container-layout-3">
                    <div class="u-expanded-width u-list u-list-1">
                        <div class="u-repeater u-repeater-1">
                            <div onclick="show_sec1()" class="cursor u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-dark-3 u-container-style u-custom-item u-hover-feature u-list-item u-repeater-item u-list-item-1">
                                <div class="u-container-layout u-similar-container u-container-layout-4">
                                    <h6 class="u-align-right u-hover-feature u-text u-text-2">شاشة الاستقبال&nbsp;<span class="u-file-icon u-icon u-text-palette-1-base u-icon-1"><img src="images/1946436-05e400eb.png" alt=""></span></h6>
                                </div>
                            </div>
                            <div onclick="show_sec2()" class="cursor u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-dark-3 u-container-align-right u-container-style u-custom-item u-hover-feature u-list-item u-repeater-item u-list-item-2">
                                <div class="u-container-layout u-similar-container u-container-layout-5">
                                    <h6 class="u-align-right u-hover-feature u-text u-text-3">تقارير العيادات<span class="u-file-icon u-icon u-text-palette-1-base u-icon-2"><img src="images/1808-04119d95.png" alt=""></span></h6>
                                </div>
                            </div>
                            <div onclick="show_sec3()" class="cursor u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-dark-3 u-container-align-right u-container-style u-custom-item u-hover-feature u-list-item u-repeater-item u-list-item-3">
                                <div class="u-container-layout u-similar-container u-container-layout-6">
                                    <h6 class="u-align-right u-hover-feature u-text u-text-4">ادارة المرضي<span class="u-file-icon u-icon u-text-palette-1-base u-icon-3"><img src="images/4930240-57917a1b.png" alt=""></span></h6>
                                </div>
                            </div>
                            <div onclick="show_sec4()" class="cursor u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-dark-3 u-container-align-right u-container-style u-custom-item u-hover-feature u-list-item u-repeater-item u-list-item-4">
                                <div class="u-container-layout u-similar-container u-container-layout-7">
                                    <h6 class="u-align-right u-hover-feature u-text u-text-5">ادارة الحجوزات&nbsp;<span class="u-file-icon u-icon u-text-palette-1-base u-icon-4"><img src="images/5309530-4176f56d.png" alt=""></span></h6>
                                </div>
                            </div>
                            <div onclick="show_sec5()" class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-base u-container-align-right u-container-style u-custom-item u-hover-feature u-list-item u-repeater-item u-white u-list-item-5">
                                <div class="u-container-layout u-similar-container u-container-layout-8">
                                    <h6 class="u-align-right u-hover-feature u-text u-text-6">ادارة المستخدمين&nbsp;<span class="u-file-icon u-icon u-text-palette-1-base u-icon-5"><img src="images/456212-47ad7708.png" alt=""></span></h6>
                                </div>
                            </div>
                            <div onclick="show_sec6()" class="cursor u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-dark-3 u-container-align-right u-container-style u-custom-item u-hover-feature u-list-item u-repeater-item u-list-item-6">
                                <div class="u-container-layout u-similar-container u-container-layout-9">
                                    <h6 class="u-align-right u-hover-feature u-text u-text-7">ادارة جهات التأمين&nbsp;<span class="u-file-icon u-icon u-text-palette-1-base u-icon-6"><img src="images/2309996-77d6af3c.png" alt=""></span></h6>
                                </div>
                            </div>
                            <div onclick="show_sec7()" class="cursor u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-dark-3 u-container-align-right u-container-style u-custom-item u-hover-feature u-list-item u-repeater-item u-list-item-7">
                                <div class="u-container-layout u-similar-container u-container-layout-10">
                                    <h6 class="u-align-right u-hover-feature u-text u-text-8">الادارة المالية&nbsp;<span class="u-file-icon u-icon u-text-palette-1-base u-icon-7"><img src="images/1604644-015dbc19.png" alt=""></span></h6>
                                </div>
                            </div>
                            <div onclick="show_sec8()" class="cursor u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-dark-3 u-container-align-right u-container-style u-custom-item u-hover-feature u-list-item u-repeater-item u-list-item-8">
                                <div class="u-container-layout u-similar-container u-container-layout-11">
                                    <h6 class="u-align-right u-hover-feature u-text u-text-9">بيانات الادوية<span class="u-file-icon u-icon u-text-palette-1-base u-icon-8"><img src="images/1059-c1b95b39.png" alt=""></span></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="" class="u-align-center u-border-none u-btn u-button-style u-hover-feature u-hover-palette-2-base u-palette-1-base u-btn-3">
                        <span class="u-file-icon u-icon u-text-white u-icon-9"><img src="images/1286853-e6bb3c19.png" alt=""></span>&nbsp;​تسجيل الخروج
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>