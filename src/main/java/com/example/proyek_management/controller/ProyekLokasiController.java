package com.example.proyek_management.controller;

import com.example.proyek_management.exception.ResourceNotFoundException;
import com.example.proyek_management.model.Lokasi;
import com.example.proyek_management.model.Proyek;
import com.example.proyek_management.model.ProyekLokasi;
import com.example.proyek_management.repository.LokasiRepository;
import com.example.proyek_management.repository.ProyekLokasiRepository;
import com.example.proyek_management.repository.ProyekRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.RestController;

@RestController
@RequestMapping("/proyek-lokasi")
public class ProyekLokasiController {

    @Autowired
    private ProyekLokasiRepository proyekLokasiRepository;

    @Autowired
    private ProyekRepository proyekRepository;

    @Autowired
    private LokasiRepository lokasiRepository;

    @PostMapping
    public ProyekLokasi createProyekLokasi(@RequestParam Long proyekId, @RequestParam Long lokasiId) {
        Proyek proyek = proyekRepository.findById(proyekId)
                .orElseThrow(() -> new ResourceNotFoundException("Proyek not found for this id :: " + proyekId));
        Lokasi lokasi = lokasiRepository.findById(lokasiId)
                .orElseThrow(() -> new ResourceNotFoundException("Lokasi not found for this id :: " + lokasiId));

        ProyekLokasi proyekLokasi = new ProyekLokasi();
        proyekLokasi.setProyek(proyek);
        proyekLokasi.setLokasi(lokasi);

        return proyekLokasiRepository.save(proyekLokasi);
    }
}
