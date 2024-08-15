package com.example.proyek_management.service;

import com.example.proyek_management.model.Lokasi;
import com.example.proyek_management.repository.LokasiRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.util.Optional;

@Service
public class LokasiService {

    @Autowired
    private LokasiRepository lokasiRepository;

    public  Lokasi getLokasiById(Long id) {
        Optional<Lokasi> lokasi = lokasiRepository.findById(id);
        return lokasi.orElse(null);
    }

    // Metode lainnya (save, update, delete) bisa ditambahkan di sini
}
