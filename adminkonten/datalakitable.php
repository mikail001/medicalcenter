<div class="table-responsive">
                    <table class="table table-striped table-hover r-0 data-tables">
                        <thead>
                            <tr class="no-b">
                                <th>No</th>
                                <th>Nama Anak</th>
                                <th>Nama Orang Tua</th>
                                <th>Tanggal Lahir</th>
                                <th>Berat Badan</th>
                                <th>Tinggi Badan</th>
                                <th>Status Gizi</th>
                                <th>No Telepon</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($getMan as $result) {
                            ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $result['NamaAnak'] ?></td>
                                    <td><?= $result['NamaOrangTua'] ?></td>
                                    <td><?= $result['TanggalLahir'] ?></td>
                                    <td><?= $result['BeratBadan'] ?></td>
                                    <td><?= $result['TinggiBadan'] ?></td>
                                    <td><?= $result['StatusGizi'] ?></td>
                                    <td><?= $result['NomorTelepon'] ?></td>
                                    <td>
                                        <a href="<?= base_url('Admin_Auth/Man/Edit/') . $result['ID'] ?>" title="Edit"><i class="icon-edit"></i></a>&nbsp;&nbsp;
                                        <a href="<?= base_url('Admin_Auth/Man/Delete/') . $result['ID'] ?>" title="Hapus"><i class="icon-trash text-danger"></i></a>&nbsp;&nbsp;
                                    </td>
                                </tr>
                            <?php }

                            ?>

                        </tbody>
                    </table>
                </div>